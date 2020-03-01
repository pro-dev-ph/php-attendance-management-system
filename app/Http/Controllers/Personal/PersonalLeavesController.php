<?php
/*
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
*/
namespace App\Http\Controllers\personal;
use DB;
use App\Classes\table;
use App\Classes\permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PersonalLeavesController extends Controller
{
    public function index() 
    {
        $i = \Auth::user()->idno;
        $ref = \Auth::user()->reference;

        $l = table::leaves()->where('idno', $i)->get();
        $lp = table::companydata()->where('reference', $ref)->value('leaveprivilege');
        $r = table::leavegroup()->where('id', $lp)->value('leaveprivileges');
        $rights = explode(",", $r);
        
        $lt = table::leavetypes()->get();
        $lg = table::leavegroup()->get();
        
        return view('personal.personal-leaves-view', compact('l', 'lt', 'lg', 'lp', 'rights'));
    }

    public function requestL(Request $request) 
    {
        if ($request->type == null || $request->typeid == null || $request->leavefrom == null || $request->leaveto == null || $request->reason == null || $request->returndate == null) {
            return redirect('personal/leaves/view')->with('error', 'Whoops! Please fill the form completely!');
        }

        $typeid = $request->typeid;
        $type = mb_strtoupper($request->type);
        $reason = mb_strtoupper($request->reason);
        $leavefrom = date("Y-m-d", strtotime($request->leavefrom));
        $leaveto = date("Y-m-d", strtotime($request->leaveto));
        $returndate = date("Y-m-d", strtotime($request->returndate));

        $id = \Auth::user()->reference;
        $idno = \Auth::user()->idno;
        $q = table::people()->where('id', $id)->select('firstname', 'mi', 'lastname')->first();
        
        table::leaves()->insert([
            'reference' => $id,
            'idno' => $idno,
            'employee' => $q->lastname.', '.$q->firstname,
            'type' => $type,
            'typeid' => $typeid,
            'leavefrom' => $leavefrom,
            'leaveto' => $leaveto,
            'returndate' => $returndate,
            'reason' => $reason,
            'status' => 'Pending',
        ]);

        return redirect('personal/leaves/view')->with('success', 'Leave request sent!');
    }

    public function getPL(Request $request) 
    {
        $id = \Auth::user()->reference;
        $datefrom = date("Y-m-d", strtotime($request->datefrom));
        $dateto = date("Y-m-d", strtotime($request->dateto));

        if($datefrom == null || $dateto == null ) {
            $data = table::leaves()->where('reference', $id)->get();

            return response()->json($data);
        } 
        
        if ($datefrom !== null AND $dateto !== null) {
            $data = table::leaves()
                                    ->where('reference', $id)
                                    ->whereDate('leavefrom', '<=', $dateto)
                                    ->whereDate('leavefrom', '>=', $datefrom)
                                    ->get();

            return response()->json($data);
        }
    }

    public function viewPL(Request $request) 
    {
        $id = $request->id;
        $view = table::leaves()->where('id', $id)->first();
        $view->leavefrom = date('M d, Y', strtotime($view->leavefrom));
        $view->leaveto = date('M d, Y', strtotime($view->leaveto));
        $view->returndate = date('M d, Y', strtotime($view->returndate));

        return response()->json($view);
    }

    public function edit($id, Request $request) 
    {
        $id = $request->id;
        $l = table::leaves()->where('id', $id)->first();
        $lt = table::leavetypes()->get();
        $type = $l->type;
        return view('personal.edits.personal-leaves-edit', compact('id', 'l', 'lt', 'type'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $type = mb_strtoupper($request->type);
        $leavefrom = $request->leavefrom;
        $leaveto = $request->leaveto;
        $returndate = $request->returndate;
        $reason = mb_strtoupper($request->reason);

        if ($id == null || $type == null || $leavefrom == null || $leaveto == null || $reason == null || $returndate == null) {
            return redirect('personal/leaves/view')->with('error', 'Whoops! Please fill the form completely!');
        }

        table::leaves()
        ->where('id', $id)
        ->update([
                    'type' => $type,
                    'leavefrom' => $leavefrom,
                    'leaveto' => $leaveto,
                    'reason' => $reason
                ]);

        return redirect('personal/leaves/view')->with('success','Leave has been updated!');
    }

    public function delete($id)
    {
        table::leaves()->where('id', $id)->delete();

        return redirect('personal/leaves/view')->with('success','Leave has been deleted!');
    }

}

