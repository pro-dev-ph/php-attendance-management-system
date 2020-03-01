<?php
/*
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
*/
namespace App\Http\Controllers\admin;
use DB;
use Carbon\Carbon;
use App\Classes\table;
use App\Classes\permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendanceController extends Controller
{
    
    public function index() 
    {
        if (permission::permitted('attendance')=='fail'){ return redirect()->route('denied'); }
        
        $data = table::attendance()->orderBy('date', 'desc')->get();
        $clock_comment = table::settings()->value('clock_comment');
        
        return view('admin.attendance', compact('data', 'clock_comment'));
    }
    
    public function clock()
    {
        return view('clock');
    }

    public function edit($id, Request $request)
    {
        if (permission::permitted('attendance-edit')=='fail'){ return redirect()->route('denied'); }

        $id = $request->id;
        $a = table::attendance()->where('id', $id)->first();

        return view('admin.edits.edit-attendance', compact('id', 'a'));
    }

    public function delete($id)
    {
        if (permission::permitted('attendance-delete')=='fail'){ return redirect()->route('denied'); }

        table::attendance()->where('id', $id)->delete();

        return redirect('attendance')->with('success', 'Deleted!');
    }

    public function update(Request $request)
    {
        if (permission::permitted('attendance-edit')=='fail') { return redirect()->route('denied'); }
        
        $id = $request->id;
        $idno = $request->idno;
        $timeIN = date("Y-m-d h:i:s A", strtotime($request->timein_date." ".$request->timein));
        $timeOUT = date("Y-m-d h:i:s A", strtotime($request->timeout_date." ".$request->timeout));
        $reason = $request->reason;

        if ($id == null || $idno == null || $timeIN == null || $timeOUT == null) {
            return redirect('attendance')->with('error', 'Whoops! Please fill the form completely!');
        }

        $sched_in_time = table::schedules()->where([
            ['idno', '=', $idno], 
            ['archive', '=', '0'],
        ])->value('intime');

        if($sched_in_time == null){
            $status_in = "Ok";
        } else {
            $sched_clock_in_time_24h = date("H.i", strtotime($sched_in_time));
            $time_in_24h = date("H.i", strtotime($timeIN));
            if ($time_in_24h <= $sched_clock_in_time_24h) {
                $status_in = 'In Time';
            } else {
                $status_in = 'Late Arrival';
            }
        }

        $sched_out_time = table::schedules()->where([
            ['idno', '=', $idno], 
            ['archive','=','0'],
        ])->value('outime');
        
        if($sched_out_time == null) {
            $status_out = "Ok";
        } else {
            $sched_clock_out_time_24h = date("H.i", strtotime($sched_out_time));
            $time_out_24h = date("H.i", strtotime($timeOUT));
            if($time_out_24h >= $sched_clock_out_time_24h) {
                $status_out = 'On Time';
            } else {
                $status_out = 'Early Departure';
            }
        }

        $time1 = Carbon::createFromFormat("Y-m-d h:i:s A", $timeIN); 
        $time2 = Carbon::createFromFormat("Y-m-d h:i:s A", $timeOUT); 
        $th = $time1->diffInHours($time2);
        $tm = floor(($time1->diffInMinutes($time2) - (60 * $th)));
        $totalhour = $th.".".$tm;

        table::attendance()->where('id', $id)->update([
            'timein' => $timeIN,
            'timeout' => $timeOUT,
            'reason' => $reason, 
            'totalhours' => $totalhour,
            'status_timein' => $status_in,
            'status_timeout' => $status_out,
        ]);

        return redirect('attendance')->with('success','Employee Attendance has been updated!');
    }
}
