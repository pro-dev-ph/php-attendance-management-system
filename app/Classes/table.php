<?php
/*
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
*/
namespace App\Classes;

use DB;

Class table {

    public static function people() {
    	$people = DB::table('tbl_people');
    	return $people;
   	}

    public static function companydata() {
    	$companydata = DB::table('tbl_company_data');
    	return $companydata;
   	}

    public static function attendance() {
    	$attendance = DB::table('tbl_people_attendance');
    	return $attendance;
   	}

    public static function leaves() {
    	$leaves = DB::table('tbl_people_leaves');
    	return $leaves;
   	}

    public static function schedules() {
    	$schedules = DB::table('tbl_people_schedules');
    	return $schedules;
   	}

    public static function reportviews() {
    	$reportviews = DB::table('tbl_report_views');
    	return $reportviews;
   	}

    public static function permissions() {
    	$permissions = DB::table('users_permissions');
    	return $permissions;
   	}

    public static function roles() {
    	$roles = DB::table('users_roles');
    	return $roles;
   	}

    public static function users() {
    	$users = DB::table('users')->select('id', 'reference', 'idno', 'name', 'email', 'role_id', 'acc_type', 'status');
    	return $users;
   	}

    public static function company() {
    	$company = DB::table('tbl_form_company');
    	return $company;
   	}

    public static function department() {
    	$department = DB::table('tbl_form_department');
    	return $department;
   	}

    public static function jobtitle() {
    	$jobtitle = DB::table('tbl_form_jobtitle');
    	return $jobtitle;
   	}

    public static function leavetypes() {
    	$leavetypes = DB::table('tbl_form_leavetype');
    	return $leavetypes;
	}

	public static function leavegroup() {
		$leavegroup = DB::table('tbl_form_leavegroup');
		return $leavegroup;
	}
	   
	public static function settings() {
    	$settings = DB::table('settings');
    	return $settings;
   	}

}