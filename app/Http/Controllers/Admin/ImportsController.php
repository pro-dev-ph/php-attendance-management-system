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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Controllers\Controller;


class ImportsController extends Controller
{

    function csvToArray($filename) 
    {
    	if( !file_exists($filename) || !is_readable($filename) ) 
    	{
    		return false;
    	}

    	$header = null;
    	if (($handle = fopen($filename, 'r')) !== false) 
    	{
    		while(($row = fgetcsv($handle, 1000, ',')) !== false) 
    		{
    			if (!$header) {
    				$header = $row;
    			} else {
    				$data[] = $row;
    			}
    		}
    		fclose($handle);
    	} 
    	return $data;
    }

	function importCompany(Request $request) 
	{
		if (permission::permitted('company')=='fail'){ return redirect()->route('denied'); }

		$uploadedfile = $request->file('csv');
		if ($uploadedfile != null) {
			$name = $request->file('csv')->getClientOriginalName();
			$destinationPath = storage_path() . '/app/';
			$uploadedfile->move($destinationPath, $name);
	
			$file = storage_path('app/' . $name);
			$array = $this->csvToArray($file);
			
			foreach ($array as $value) {
				table::company()->insert([
					[ 'id' => $value[0], 'company' => $value[1] ],
				]);
			}

			return redirect('fields/company');
		} else {
			return redirect('fields/company')->with('error', 'Whoops!, Please upload a csv file.');
		}
	}

	function importDepartment(Request $request) 
	{
		if (permission::permitted('departments')=='fail'){ return redirect()->route('denied'); }

		$uploadedfile = $request->file('csv');
		if ($uploadedfile != null) {
			$name = $request->file('csv')->getClientOriginalName();
			$destinationPath = storage_path() . '/app/';
			$uploadedfile->move($destinationPath, $name);

			$file = storage_path('app/' . $name);
			$array = $this->csvToArray($file);
			
			foreach ($array as $value) {
				table::department()->insert([
					[ 'id' => $value[0], 'department' => $value[1] ],
				]);
			}

			return redirect('fields/department');
		} else {
			return redirect('fields/department')->with('error', 'Whoops!, Please upload a csv file.');
		}
	}
	
	function importJobtitle(Request $request) 
	{
		if (permission::permitted('jobtitles')=='fail'){ return redirect()->route('denied'); }

		$uploadedfile = $request->file('csv');
		if ($uploadedfile != null) { 
			$name = $request->file('csv')->getClientOriginalName();
			$destinationPath = storage_path() . '/app/';
			$uploadedfile->move($destinationPath, $name);
	
			$file = storage_path('app/' . $name);
			$array = $this->csvToArray($file);
			
			foreach ($array as $value) {
				table::jobtitle()->insert([
					[ 'id' => $value[0], 'jobtitle' => $value[1], 'dept_Code' => $value[2] ],
				]);
			}
	
			return redirect('fields/jobtitle');
		} else {
			return redirect('fields/jobtitle')->with('error', 'Whoops!, Please upload a csv file.');
		}
	}

	function importLeavetypes(Request $request) 
	{
		if (permission::permitted('leavetypes')=='fail'){ return redirect()->route('denied'); }
		
		$uploadedfile = $request->file('csv');
		if($uploadedfile != null) {
			$name = $request->file('csv')->getClientOriginalName();
			$destinationPath = storage_path() . '/app/';
			$uploadedfile->move($destinationPath, $name);

			$file = storage_path('app/' . $name);
			$array = $this->csvToArray($file);
			
			foreach ($array as $value) {
				table::leavetypes()->insert([
					[ 'id' => $value[0], 'leavetype' => $value[1], 'limit' => $value[2], 'percalendar' => $value[3] ],
				]);
			}

			return redirect('fields/leavetype');
		} else {
			return redirect('fields/leavetype')->with('error', 'Whoops!, Please upload a csv file.');
		}
	}

}
