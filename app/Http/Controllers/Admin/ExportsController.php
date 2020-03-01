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
use Storage;


class ExportsController extends Controller
{
		
	function company(Request $request) 
	{
		if (permission::permitted('company')=='fail'){ return redirect()->route('denied'); }

		$c = table::company()->get();

		Storage::delete('company.csv');
		Storage::put('company.csv', '', 'private');

		foreach ($c as $d) {
		    Storage::prepend('company.csv', $d->id .','. $d->company);
		}

		Storage::prepend('company.csv', 'ID' .','. 'COMPANY');

		return Storage::download('company.csv');
		return redirect('fields/company');
    }

	function department(Request $request) 
	{
		if (permission::permitted('departments')=='fail'){ return redirect()->route('denied'); }

		$d = table::department()->get();

		Storage::delete('department.csv');
		Storage::put('department.csv', '', 'private');

		foreach ($d as $i) {
		    Storage::prepend('department.csv', $i->id .','. $i->department);
		}

		Storage::prepend('department.csv', 'ID' .','. 'DEPARTMENT');

		return Storage::download('department.csv');
		return redirect('fields/department');
    }

	function jobtitle(Request $request) 
	{
		if (permission::permitted('jobtitles')=='fail'){ return redirect()->route('denied'); }
		if($request->sh == 2){return redirect()->route('jobtitle');}

		$j = table::jobtitle()->get();

		Storage::delete('jobtitle.csv');
		Storage::put('jobtitle.csv', '', 'private');

		foreach ($j as $d) {
		    Storage::prepend('jobtitle.csv', $d->id .','. $d->jobtitle .','. $d->dept_code);
		}

		Storage::prepend('jobtitle.csv', 'ID' .','. 'DEPARTMENT' .','. 'DEPARTMENT CODE');

		return Storage::download('jobtitle.csv');
		return redirect('fields/jobtitle');
    }

	function leavetypes(Request $request) 
	{
		if (permission::permitted('leavetypes')=='fail'){ return redirect()->route('denied'); }
		
		$l = table::leavetypes()->get();

		Storage::delete('leavetypes.csv');
		Storage::put('leavetypes.csv', '', 'private');

		foreach ($l as $d) {
		    Storage::prepend('leavetypes.csv', $d->id .','. $d->leavetype .','. $d->limit .','. $d->percalendar);
		}

		Storage::prepend('leavetypes.csv', 'ID' .','. 'LEAVE TYPE' .','. 'LIMIT' .','. 'TYPE');

		return Storage::download('leavetypes.csv');
		return redirect('fields/leavetypes');
    }

	function employeeList() 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		$p = table::people()->get();

		Storage::delete('employee-list.csv');
		Storage::put('employee-list.csv', '', 'private');

		foreach ($p as $d) {
		    Storage::prepend('employee-list.csv', $d->id .','. $d->lastname.' '.$d->firstname.' '.$d->mi .','. $d->age .','. $d->gender .','. $d->civilstatus .','. $d->mobileno .','. $d->emailaddress .','. $d->employmenttype .','. $d->employmentstatus);
		}

		Storage::prepend('employee-list.csv', 'ID' .','. 'EMPLOYEE' .','. 'AGE' .','. 'GENDER' .','. 'CIVILSTATUS' .','. 'MOBILE NUMBER' .','. 'EMAIL ADDRESS' .','. 'EMPLOYMENT TYPE' .','. 'EMPLOYMENT STATUS');

		return Storage::download('employee-list.csv');
		return redirect('reports/employee-list');
	}

	function attendanceReport(Request $request) 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		$id = $request->emp_id;
		$datefrom = $request->datefrom;
		$dateto = $request->dateto;

		if ($id == null AND $datefrom == null AND $dateto == null) {
			
			$data = table::attendance()->get();
			Storage::delete('attendance-report.csv');
			Storage::put('attendance-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('attendance-report.csv', $d->id .','. $d->idno .','. $d->date .','. '"'.$d->employee.'"' .','. $d->timein .','. $d->timeout .','. $d->totalhours .','. $d->status_timein .','. $d->status_timeout);
			}

			Storage::prepend('attendance-report.csv', 'ID' .','. 'IDNO' .','. 'DATE' .','. 'EMPLOYEE' .','. 'TIME IN' .','. 'TIME OUT' .','. 'TOTAL HOURS' .','. 'STATUS-IN' .','. 'STATUS-OUT');
			
			return Storage::download('attendance-report.csv');
			return redirect('reports/employee-attendance');
		}

		if ($id !== null AND $datefrom !== null AND $dateto !== null) {
			
			$data = table::attendance()->where('idno', $id)->whereBetween('date', [$datefrom, $dateto])->get();
			Storage::delete('attendance-report.csv');
			Storage::put('attendance-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('attendance-report.csv', $d->id .','. $d->idno .','. $d->date .','. '"'.$d->employee.'"' .','. $d->timein .','. $d->timeout .','. $d->totalhours .','. $d->status_timein .','. $d->status_timeout);
			}

			Storage::prepend('attendance-report.csv', 'ID' .','. 'IDNO' .','. 'DATE' .','. 'EMPLOYEE' .','. 'TIME IN' .','. 'TIME OUT' .','. 'TOTAL HOURS' .','. 'STATUS-IN' .','. 'STATUS-OUT');
			
			return Storage::download('attendance-report.csv');
			return redirect('reports/employee-attendance');
		}

		if($id !== null AND $datefrom == null AND $dateto == null ) {
		 	
			$data = table::attendance()->where('idno', $id)->get();

			Storage::delete('attendance-report.csv');
			Storage::put('attendance-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('attendance-report.csv', $d->id .','. $d->idno .','. $d->date .','. '"'.$d->employee.'"' .','. $d->timein .','. $d->timeout .','. $d->totalhours .','. $d->status_timein .','. $d->status_timeout);
			}

			Storage::prepend('attendance-report.csv', 'ID' .','. 'IDNO' .','. 'DATE' .','. 'EMPLOYEE' .','. 'TIME IN' .','. 'TIME OUT' .','. 'TOTAL HOURS' .','. 'STATUS-IN' .','. 'STATUS-OUT');
			
			return Storage::download('attendance-report.csv');
			return redirect('reports/employee-attendance');
		} 

		if ($id == null AND $datefrom !== null AND $dateto !== null) {

			$data = table::attendance()->whereBetween('date', [$datefrom, $dateto])->get();

			Storage::delete('attendance-report.csv');
			Storage::put('attendance-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('attendance-report.csv', $d->id .','. $d->idno .','. $d->date .','. '"'.$d->employee.'"' .','. $d->timein .','. $d->timeout .','. $d->totalhours .','. $d->status_timein .','. $d->status_timeout);
			}

			Storage::prepend('attendance-report.csv', 'ID' .','. 'IDNO' .','. 'DATE' .','. 'EMPLOYEE' .','. 'TIME IN' .','. 'TIME OUT' .','. 'TOTAL HOURS' .','. 'STATUS-IN' .','. 'STATUS-OUT');
			
			return Storage::download('attendance-report.csv');
			return redirect('reports/employee-attendance');
		}

		return redirect('reports/employee-attendance')->with('error', 'Whoops! Please provide date range or select employee.');
	}

	function leavesReport(Request $request) 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$id = $request->emp_id;
		$datefrom = $request->datefrom;
		$dateto = $request->dateto;

		if ($id == null AND $datefrom == null AND $dateto == null) {
			
			$data = table::leaves()->get();
			Storage::delete('leaves-report.csv');
			Storage::put('leaves-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('leaves-report.csv', $d->id .','. $d->idno .','. '"'.$d->employee.'"' .','. $d->type .','. $d->leavefrom .','. $d->leaveto .','. $d->reason .','. $d->status);
			}

			Storage::prepend('leaves-report.csv', 'ID' .','. 'IDNO' .','. 'EMPLOYEE' .','. 'TYPE' .','. 'LEAVE FROM' .','. 'LEAVE TO' .','. 'REASON' .','. 'STATUS');
			
			return Storage::download('leaves-report.csv');
			return redirect('reports/employee-leaves');
		}

		if ($id !== null AND $datefrom !== null AND $dateto !== null) {
			
			$data = table::leaves()->where('idno', $id)->whereBetween('leavefrom', [$datefrom, $dateto])->get();
			Storage::delete('leaves-report.csv');
			Storage::put('leaves-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('leaves-report.csv', $d->id .','. $d->idno .','. '"'.$d->employee.'"' .','. $d->type .','. $d->leavefrom .','. $d->leaveto .','. $d->reason .','. $d->status);
			}

			Storage::prepend('leaves-report.csv', 'ID' .','. 'IDNO' .','. 'EMPLOYEE' .','. 'TYPE' .','. 'LEAVE FROM' .','. 'LEAVE TO' .','. 'REASON' .','. 'STATUS');
			
			return Storage::download('leaves-report.csv');
			return redirect('reports/employee-leaves');
		}

		if($id !== null AND $datefrom == null AND $dateto == null ) {
		 	
			$data = table::leaves()->where('idno', $id)->get();
			Storage::delete('leaves-report.csv');
			Storage::put('leaves-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('leaves-report.csv', $d->id .','. $d->idno .','. '"'.$d->employee.'"' .','. $d->type .','. $d->leavefrom .','. $d->leaveto .','. $d->reason .','. $d->status);
			}

			Storage::prepend('leaves-report.csv', 'ID' .','. 'IDNO' .','. 'EMPLOYEE' .','. 'TYPE' .','. 'LEAVE FROM' .','. 'LEAVE TO' .','. 'REASON' .','. 'STATUS');
			
			return Storage::download('leaves-report.csv');
			return redirect('reports/employee-leaves');
		} 

		if ($id == null AND $datefrom !== null AND $dateto !== null) {

			$data = table::leaves()->whereBetween('leavefrom', [$datefrom, $dateto])->get();
			Storage::delete('leaves-report.csv');
			Storage::put('leaves-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('leaves-report.csv', $d->id .','. $d->idno .','. '"'.$d->employee.'"' .','. $d->type .','. $d->leavefrom .','. $d->leaveto .','. $d->reason .','. $d->status);
			}

			Storage::prepend('leaves-report.csv', 'ID' .','. 'IDNO' .','. 'EMPLOYEE' .','. 'TYPE' .','. 'LEAVE FROM' .','. 'LEAVE TO' .','. 'REASON' .','. 'STATUS');
			
			return Storage::download('leaves-report.csv');
			return redirect('reports/employee-leaves');
		}

		return redirect('reports/employee-leaves')->with('error', 'Whoops! Please provide date range or select employee.');
	}

	function birthdaysReport() 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		$c = table::people()
			->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')
			->get();

		Storage::delete('employee-birthdays.csv');
		Storage::put('employee-birthdays.csv', '', 'private');

		foreach ($c as $d) {
		    Storage::prepend('employee-birthdays.csv', $d->idno .','. $d->lastname.' '.$d->firstname.' '.$d->mi .','. $d->department .','. $d->jobposition .','. $d->birthday .','. $d->mobileno);
		}

		Storage::prepend('employee-birthdays.csv', 'ID' .','. 'EMPLOYEE NAME' .','. 'DEPARTMENT' .','. 'POSITION' .','. 'BIRTHDAY' .','. 'MOBILE NUMBER' );

		return Storage::download('employee-birthdays.csv');
		return redirect('reports/employee-birthdays');
	}

	function accountReport() 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		$u = table::users()->get();

		Storage::delete('employee-accounts.csv');
		Storage::put('employee-accounts.csv', '', 'private');

		foreach ($u as $a) {
			if($a->acc_type == 2) {
				$a_type = 'Admin';
			} else {
				$a_type = 'Employee';
			}
			Storage::prepend('employee-accounts.csv', $a->name .','. $a->email .','. $a_type);

			Storage::prepend('employee-accounts.csv', 'EMPLOYEE NAME' .','. 'EMAIL' .','. 'ACCOUNT TYPE');

			return Storage::download('employee-accounts.csv');
			return redirect('reports/user-accounts');
		}
	}

	function scheduleReport(Request $request) 
	{
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		$id = $request->emp_id;

		if ($id == null) {
			$data = table::schedules()->get();
			Storage::delete('schedule-report.csv');
			Storage::put('schedule-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('schedule-report.csv', $d->idno .',"'. $d->employee .'",'. $d->intime .','. '"'.$d->outime.'"' .','. $d->datefrom .','. $d->dateto .','. $d->hours .',"'. $d->restday .'",'. $d->archive);
			}

			Storage::prepend('schedule-report.csv', 'IDNO' .','. 'EMPLOYEE' .','. 'START TIME' .','. 'OFF TIME' .','. 'DATE FROM' .','. 'DATE TO' .','. 'HOURS' .','. 'RESTDAY' .','. 'STATUS');
			
			return Storage::download('schedule-report.csv');
			return redirect('reports/employee-schedule');
		}

		if ($id !== null) {
			
			$data = table::schedules()->where('idno', $id)->get();
			Storage::delete('schedule-report.csv');
			Storage::put('schedule-report.csv', '', 'private');

			foreach ($data as $d) {
				Storage::prepend('schedule-report.csv', $d->idno .',"'. $d->employee .'",'. $d->intime .','. '"'.$d->outime.'"' .','. $d->datefrom .','. $d->dateto .','. $d->hours .',"'. $d->restday .'",'. $d->archive);
			}

			Storage::prepend('schedule-report.csv', 'IDNO' .','. 'EMPLOYEE' .','. 'START TIME' .','. 'OFF TIME' .','. 'DATE FROM' .','. 'DATE TO' .','. 'HOURS' .','. 'RESTDAY' .','. 'STATUS');
			
			return Storage::download('schedule-report.csv');
			return redirect('reports/employee-schedule');
		}

		return redirect('reports/employee-schedule')->with('error', 'Whoops! Please select employee.');
	}

}
