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
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
 

class EmployeesController extends Controller
{

	public function index() 
	{
        if (permission::permitted('employees')=='fail'){ return redirect()->route('denied'); }

		$emp_typeR = table::people()
		->where('employmenttype', 'Regular')
		->where('employmentstatus', 'Active')
		->count();

		$emp_typeT = table::people()
		->where('employmenttype', 'Trainee')
		->where('employmentstatus', 'Active')
		->count();

		$emp_genderM = table::people()
		->where('gender', 'Male')
		->count();

		$emp_genderR = table::people()
		->where('gender', 'Female')
		->count();

		$emp_allActive = table::people()
		->where('employmentstatus', 'Active')
		->count();

		$emp_allArchive = table::people()
		->where('employmentstatus', 'Archive')
		->count();

		$data = table::people()
		->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')
		->get();

		$emp_file = table::people()->count();
		
		if($emp_allArchive != null OR $emp_allActive != null OR $emp_allArchive >= 1 OR $emp_allActive >= 1){
			$number1 = $emp_allArchive / $emp_allActive * 100;
		} else {
			$number1 = null;
		}
		
	    return view('admin.employees', compact('data', 'emp_typeR', 'emp_typeT', 'emp_genderM', 'emp_genderR', 'emp_allActive', 'emp_file', 'emp_allArchive'));
	}

	public function new() 
	{
		if (permission::permitted('employees-add')=='fail'){ return redirect()->route('denied'); }
		
		$employees = table::people()->get();
		$company = table::company()->get();
		$department = table::department()->get();
		$jobtitle = table::jobtitle()->get();
		$leavegroup = table::leavegroup()->get();

	    return view('admin.new-employee', compact('company', 'department', 'jobtitle', 'employees', 'leavegroup'));
	}
	
    public function add(Request $request)
    {
		if (permission::permitted('employees-add')=='fail'){ return redirect()->route('denied'); }
		
		$lastname = mb_strtoupper($request->lastname);
		$firstname = mb_strtoupper($request->firstname);
		$mi = mb_strtoupper($request->mi);
		$age = $request->age;
		$gender = mb_strtoupper($request->gender);
		$emailaddress = mb_strtolower($request->emailaddress);
		$civilstatus = mb_strtoupper($request->civilstatus);
		$height = $request->height;
		$weight = $request->weight;
		$mobileno = $request->mobileno;
		$birthday = date("Y-m-d", strtotime($request->birthday));
		$nationalid = mb_strtoupper($request->nationalid);
		$birthplace = mb_strtoupper($request->birthplace);
		$homeaddress = mb_strtoupper($request->homeaddress);
		
		$company = mb_strtoupper($request->company);
		$department = mb_strtoupper($request->department);
		$jobposition = mb_strtoupper($request->jobposition);
		$companyemail = mb_strtolower($request->companyemail);
		$leaveprivilege = $request->leaveprivilege;
		$idno = mb_strtoupper($request->idno);
		$employmenttype = $request->employmenttype;
		$employmentstatus = $request->employmentstatus;
		$startdate = date("Y-m-d", strtotime($request->startdate));
		$dateregularized = date("Y-m-d", strtotime($request->dateregularized));

        if ($lastname == null || $firstname == null || $emailaddress == null) {
            return redirect('employees-new')->with('error', 'Whoops! Please fill the form completely!');
		}
		
		$is_idno_taken = table::companydata()->where('idno', $idno)->exists();
		if ($is_idno_taken == 1) {
			return redirect('employees-new')->with('error', 'Whoops! the ID Number is already taken.');
		}

		$file = $request->file('image');
		if($file != null) {
			$name = $request->file('image')->getClientOriginalName();

			$destinationPath = public_path() . '/assets/faces/';
			$file->move($destinationPath, $name);
		} else {
			$name = '';
		}
		
    	table::people()->insert([
    		[
				'lastname' => $lastname,
				'firstname' => $firstname,
				'mi' => $mi,
				'age' => $age,
				'gender' => $gender,
				'emailaddress' => $emailaddress,
				'civilstatus' => $civilstatus,
				'height' => $height,
				'weight' => $weight,
				'mobileno' => $mobileno,
				'birthday' => $birthday,
				'birthplace' => $birthplace,
				'nationalid' => $nationalid,
				'homeaddress' => $homeaddress,
				'employmenttype' => $employmenttype,
				'employmentstatus' => $employmentstatus,
				'avatar' => $name,
            ],
    	]);

    	$refId = DB::getPdo()->lastInsertId();
    	table::companydata()->insert([
    		[
    			'reference' => $refId,
				'company' => $company,
				'department' => $department,
				'jobposition' => $jobposition,
				'companyemail' => $companyemail,
				'leaveprivilege' => $leaveprivilege,
				'idno' => $idno,
				'startdate' => $startdate,
				'dateregularized' => $dateregularized,
            ],
    	]);

    	return redirect('employees')->with('success','Employee has been added!');
    }
}
