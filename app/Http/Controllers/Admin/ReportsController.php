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


class ReportsController extends Controller
{
    public function index() {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }

		$lastviews = table::reportviews()->get();

    	return view('admin.reports', ['lastviews' => $lastviews]);
    }

	public function empList(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 1)->update(['last_viewed' => $today]);

		$empList = table::people()->get();
		return view('admin.reports.report-employee-list', compact('empList'));
	}

	public function empAtten(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 2)->update(array('last_viewed' => $today));

		$empAtten = table::attendance()->get();
		$employee = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->where('tbl_people.employmentstatus', 'Active')->get();

		return view('admin.reports.report-employee-attendance', compact('empAtten', 'employee'));
	}

	public function empLeaves(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 3)->update(array('last_viewed' => $today));

		$employee = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->where('tbl_people.employmentstatus', 'Active')->get();
		$empLeaves = table::leaves()->get();
		return view('admin.reports.report-employee-leaves', compact('empLeaves', 'employee'));
	}

	public function empSched(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 4)->update(array('last_viewed' => $today));

		$empSched = table::schedules()->orderBy('archive', 'ASC')->get();
		$employee = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->where('tbl_people.employmentstatus', 'Active')->get();
		return view('admin.reports.report-employee-schedule', compact('empSched', 'employee'));
	}

	public function orgProfile(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 5)->update(array('last_viewed' => $today));

		$ed = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->where('tbl_people.employmentstatus', 'Active')->get();
		
		$age_18_24 = table::people()->where([['age', '>=', '18'], ['age', '<=', '24']])->count();
		$age_25_31 = table::people()->where([['age', '>=', '25'], ['age', '<=', '31']])->count();
		$age_32_38 = table::people()->where([['age', '>=', '32'], ['age', '<=', '38']])->count();
		$age_39_45 = table::people()->where([['age', '>=', '39'], ['age', '<=', '45']])->count();
		$age_46_100 = table::people()->where('age', '>=', '46')->count();
		
		if($age_18_24 == null) {$age_18_24 = 0;};
		if($age_25_31 == null) {$age_25_31 = 0;};
		if($age_32_38 == null) {$age_32_38 = 0;};
		if($age_39_45 == null) {$age_39_45 = 0;};
		if($age_46_100 == null) {$age_46_100 = 0;};	

		$age_group = $age_18_24.','.$age_25_31.','.$age_32_38.','.$age_39_45.','.$age_46_100;
		$dcc = null; 
		$dpc = null;
		$dgc = null;
		$csc = null;
		$yhc = null;

		foreach ($ed as $c) { $comp[] = $c->company; $dcc = array_count_values($comp); }
		$cc = ($dcc == null) ? null : implode($dcc, ', ') . ',' ;

		foreach ($ed as $d) { $dept[] = $d->department; $dpc = array_count_values($dept); }
		$dc = ($dpc == null) ? null : implode($dpc, ', ') . ',' ;

		foreach ($ed as $g) { $gender[] = $g->gender; $dgc = array_count_values($gender); }
		$gc = ($dgc == null) ? null : implode($dgc, ', ') . ',' ;

		foreach ($ed as $cs) { $civilstatus[] = $cs->civilstatus; $csc = array_count_values($civilstatus); }
		$cg = ($csc == null) ? null : implode($csc, ', ') . ',' ;

		foreach ($ed as $yearhired) {
			$year[] = date("Y", strtotime($yearhired->startdate));
			asort($year); 
			$yhc = array_count_values($year);
		}
		$yc = ($yhc == null) ? null : implode($yhc, ', ') . ',' ;
		
		$orgProfile = table::companydata()->get();

		return view('admin.reports.report-organization-profile', compact('orgProfile', 'age_group', 'gc', 'dgc', 'cg', 'csc', 'yc', 'yhc', 'dc', 'dpc', 'dcc', 'cc'));
	}

	public function empBday(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 7)->update(['last_viewed' => $today]);

		$empBday = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->get();

		return view('admin.reports.report-employee-birthdays', compact('empBday'));
	}

	public function userAccs(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$today = date('M, d Y');
		table::reportviews()->where('report_id', 6)->update(['last_viewed' => $today]);

		$userAccs = table::users()->get();

		return view('admin.reports.report-user-accounts', compact('userAccs'));
	}

	public function getEmpAtten(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }

		$id = $request->id;
		$datefrom = $request->datefrom;
		$dateto = $request->dateto;
		
		if ($id == null AND $datefrom == null AND $dateto == null) {
			$data = table::attendance()->select('idno', 'date', 'employee', 'timein', 'timeout', 'totalhours')->get();
			return response()->json($data);
		}

		if($id !== null AND $datefrom == null AND $dateto == null ) {
		 	$data = table::attendance()->where('idno', $id)->select('idno', 'date', 'employee', 'timein', 'timeout', 'totalhours')->get();
			return response()->json($data);

		} elseif ($id !== null AND $datefrom !== null AND $dateto !== null) {
			$data = table::attendance()->where('idno', $id)->whereBetween('date', [$datefrom, $dateto])->select('idno', 'date', 'employee', 'timein', 'timeout', 'totalhours')->get();
			return response()->json($data);

		} elseif ($id == null AND $datefrom !== null AND $dateto !== null) {
			$data = table::attendance()->whereBetween('date', [$datefrom, $dateto])->select('idno', 'date', 'employee', 'timein', 'timeout', 'totalhours')->get();
			return response()->json($data);
		} 
	}

	public function getEmpLeav(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }

		$id = $request->id;
		$datefrom = $request->datefrom;
		$dateto = $request->dateto;

		if ($id == null AND $datefrom == null AND $dateto == null) {
			$data = table::leaves()->select('idno', 'employee', 'type', 'leavefrom', 'leaveto', 'status', 'reason')->get();
			return response()->json($data);
		}

		if($id !== null AND $datefrom == null AND $dateto == null ) {
			$data = table::leaves()->where('idno', $id)->select('idno', 'employee', 'type', 'leavefrom', 'leaveto', 'status', 'reason')->get();
			return response()->json($data);

		} elseif ($id !== null AND $datefrom !== null AND $dateto !== null) {
			$data = table::leaves()->where('idno', $id)->whereBetween('leavefrom', [$datefrom, $dateto])->select('idno', 'employee', 'type', 'leavefrom', 'leaveto', 'status', 'reason')->get();
			return response()->json($data);

		} elseif ($id == null AND $datefrom !== null AND $dateto !== null) {
			$data = table::leaves()->whereBetween('leavefrom', [$datefrom, $dateto])->select('idno', 'employee', 'type', 'leavefrom', 'leaveto', 'status', 'reason')->get();
			return response()->json($data);
		} 
	}

	public function getEmpSched(Request $request) {
		if (permission::permitted('reports')=='fail'){ return redirect()->route('denied'); }
		
		$id = $request->id;
		
		if ($id == null) {
			$data = table::schedules()->select('reference', 'employee', 'intime', 'outime', 'datefrom', 'dateto', 'hours', 'restday', 'archive')->orderBy('archive', 'ASC')->get();
			return response()->json($data);
		}

		if($id !== null) {
		 	$data = table::schedules()->where('idno', $id)->select('reference', 'employee', 'intime', 'outime', 'datefrom', 'dateto', 'hours', 'restday', 'archive')->orderBy('archive', 'ASC')->get();
			return response()->json($data);
		} 
	}
}
