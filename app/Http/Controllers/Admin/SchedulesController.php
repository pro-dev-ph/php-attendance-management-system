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
use App\Classes\table;
use App\Classes\permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SchedulesController extends Controller
{
    public function index() 
    {
        if (permission::permitted('schedules')=='fail'){ return redirect()->route('denied'); }
        
        $employee = table::people()->get();
        $schedules = table::schedules()->get();
    
        return view('admin.schedules', compact('employee', 'schedules'));
    }

    public function add(Request $request) 
    {
        if (permission::permitted('schedules-add')=='fail'){ return redirect()->route('denied'); }

    	$id = $request->id;
		$employee = mb_strtoupper($request->employee);
		$intime = $request->intime;
		$outime = $request->outime;
		$datefrom = $request->datefrom;
		$dateto = $request->dateto;
		$hours = $request->hours;
        $restday = ($request->restday != null) ? implode(', ', $request->restday) : null ;
        
        if ($employee == '' || $intime == '' || $outime == '' || $id == '') {
        	return redirect('schedules')->with('error', 'Whoops! Please fill the form completely.');
        } 

        $ref = table::schedules()->where([['reference', $id],['archive', 0]])->exists();

        if ($ref == 1) {
            return redirect('schedules')->with('error', 'Oops! This employee has schedule already. Please arhive the present schedule to add new schedule.');
        }

        $emp_id = table::companydata()->where('reference', $id)->value('idno');
    
        table::schedules()->where('id', $id)->insert([
        	'reference' => $id,
        	'idno' => $emp_id,
        	'employee' => $employee,
        	'intime' => $intime,
        	'outime' => $outime,
        	'datefrom' => $datefrom,
        	'dateto' => $dateto,
        	'hours' => $hours,
        	'restday' => $restday,
        	'archive' => '0',
    	]);

    	return redirect('schedules')->with('success', 'New Schedule Added!');
	}

    public function edit($id, Request $request) 
    {
        if (permission::permitted('schedules-edit')=='fail'){ return redirect()->route('denied'); }

        $s = table::schedules()->where('id', $id)->first();
        $r = explode(', ', $s->restday);
        
        return view('admin.edits.edit-schedule', compact('s','r'));
    }

    public function update(Request $request) 
    {
        if (permission::permitted('schedules-edit')=='fail'){ return redirect()->route('denied'); }

        $id = $request->id;
        $intime = $request->intime;
        $outime = $request->outime;
        $datefrom = $request->datefrom; 
        $dateto = $request->dateto; 
        $hours = $request->hours;
        $restday = implode(', ', $request->restday);

        if ($id == null || $intime == null || $outime == null || $datefrom == null || $dateto == null || $restday == null) {
            return redirect('schedules')->with('error', 'Whoops! Please fill the form completely.');
        }

        table::schedules()
        ->where('id', $id)
        ->update([
                'intime' => $intime,
                'outime' => $outime,
                'datefrom' => $datefrom,
                'dateto' => $dateto,
                'hours' => $hours,
                'restday' => $restday,
        ]);

        return redirect('schedules')->with('success', 'Schedule has been updated!');
    }

    public function delete($id) 
    {
        if (permission::permitted('schedules-delete')=='fail'){ return redirect()->route('denied'); }

        table::schedules()->where('id', $id)->delete();

        return redirect('schedules')->with('success', 'Deleted!');
    }

    public function archive($id)
    {
		if (permission::permitted('schedules-archive')=='fail'){ return redirect()->route('denied'); }
        
		table::schedules()->where('id', $id)->update(['archive' => '1']);

    	return redirect('schedules')->with('success','Schedule has been archived.');
   	}

}