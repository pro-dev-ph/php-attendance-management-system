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


class PersonalSchedulesController extends Controller
{
    public function index() 
    {
        $i = \Auth::user()->idno;
        $s = table::schedules()->where('idno', $i)->get();
        return view('personal.personal-schedules-view', compact('s'));
    }

    public function getPS(Request $request) 
    {
        $id = \Auth::user()->idno;
        $datefrom = $request->datefrom;
		$dateto = $request->dateto;
		
		if($datefrom == null || $dateto == null ) {
            $data = table::schedules()
            ->select('intime', 'outime', 'datefrom', 'dateto', 'hours', 'restday', 'archive')
            ->where('idno', $id)
            ->get();
            
            return response()->json($data);

		} elseif ($datefrom !== null AND $dateto !== null) {
            $data = table::schedules()
            ->select('intime', 'outime', 'datefrom', 'dateto', 'hours', 'restday', 'archive')
            ->where('idno', $id)
            ->whereBetween('datefrom', [$datefrom, $dateto])
            ->get();
            
            return response()->json($data);
        } 
    }
}

