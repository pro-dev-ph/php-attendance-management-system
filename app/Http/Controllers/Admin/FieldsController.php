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


class FieldsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Company
    |--------------------------------------------------------------------------
    */
    public function company() 
    {
      if (permission::permitted('company')=='fail'){ return redirect()->route('denied'); }

      $data = table::company()->get();
      return view('admin.fields.company', compact('data'));
    }

    public function addCompany(Request $request)
    {
      if (permission::permitted('company-add')=='fail'){ return redirect()->route('denied'); }

      $company = mb_strtoupper($request->company);

      if ($company == null) {
        return redirect('fields/company')->with('error', 'Whoops! Please fill the form completely!');
      }

      table::company()->insert([
        ['company' => $company],
      ]);

      return redirect('fields/company')->with('success','New Company has been saved.');
    }

    public function deleteCompany($id)
    {
      if (permission::permitted('company-delete')=='fail'){ return redirect()->route('denied'); }

      table::company()->where('id', $id)->delete();

      return redirect('fields/company')->with('success','Deleted!');
    }


    /*
    |--------------------------------------------------------------------------
    | Department
    |--------------------------------------------------------------------------
    */
    public function department() 
    {
      if (permission::permitted('departments')=='fail'){ return redirect()->route('denied'); }

      $data = table::department()->get();
      return view('admin.fields.department', compact('data'));
    }

    public function addDepartment(Request $request)
    {
      if (permission::permitted('departments-add')=='fail'){ return redirect()->route('denied'); }

      $department = mb_strtoupper($request->department);

      if ($department == null) {
        return redirect('fields/departments')->with('error', 'Whoops! Please fill the form completely!');
      }

      table::department()->insert([
        ['department' => $department],
      ]);

      return redirect('fields/department')->with('success','New Department has been saved.');
    }

    public function deleteDepartment($id)
    {
      if (permission::permitted('departments-delete')=='fail'){ return redirect()->route('denied'); }

      table::department()->where('id', $id)->delete();

      return redirect('fields/department')->with('success','Deleted!');
    }

    /*
    |--------------------------------------------------------------------------
    | Job Title or Position
    |--------------------------------------------------------------------------
    */
    public function jobtitle() 
    {
      if (permission::permitted('jobtitles')=='fail'){ return redirect()->route('denied'); }

      $data = table::jobtitle()->get();
      $d = table::department()->get();

      return view('admin.fields.jobtitle', compact('data', 'd'));
    }

    public function addJobtitle(Request $request)
    {
      if (permission::permitted('jobtitles-add')=='fail'){ return redirect()->route('denied'); }

      $jobtitle = mb_strtoupper($request->jobtitle);
      $dept_code = $request->dept_code;

      if ($jobtitle == null || $dept_code == null) {
        return redirect('fields/jobtitle')->with('error', 'Whoops! Please fill the form completely!');
      }

      table::jobtitle()->insert([
        [
          'jobtitle' => $jobtitle, 
          'dept_code' => $dept_code
        ],
      ]);

      return redirect('fields/jobtitle')->with('success','New Job Title has been saved.');
    }

    public function deleteJobtitle($id)
    {
      if (permission::permitted('jobtitles-delete')=='fail'){ return redirect()->route('denied'); }

      table::jobtitle()->where('id', $id)->delete();

      return redirect('fields/jobtitle')->with('success','Deleted!');
    }


    /*
    |--------------------------------------------------------------------------
    | Leave Type
    |--------------------------------------------------------------------------
    */
    public function leavetype() 
    {
        if (permission::permitted('leavetypes')=='fail'){ return redirect()->route('denied'); }

        $data = table::leavetypes()->get();

        return view('admin.fields.leavetype', compact('data'));
    }

    public function addLeavetype(Request $request)
    {
      if (permission::permitted('leavetypes-add')=='fail'){ return redirect()->route('denied'); }

      $leavetype = mb_strtoupper($request->leavetype);
      $limit = $request->limit;
      $percalendar = $request->percalendar;

      if ($leavetype == null || $limit == null || $percalendar == null) {
        return redirect('fields/leavetype')->with('error', 'Whoops! Please fill the form completely!');
      }

      table::leavetypes()->insert([
        ['leavetype' => $leavetype,'limit' => $limit, 'percalendar' => $percalendar]
      ]);

      return redirect('fields/leavetype')->with('success','New Leave Type has been saved.');
    }

    public function deleteLeavetype($id)
    {
      if (permission::permitted('leavetypes-delete')=='fail'){ return redirect()->route('denied'); }
      
      table::leavetypes()->where('id', $id)->delete();

      return redirect('fields/leavetype')->with('success','Deleted!');
    }


    /*
    |--------------------------------------------------------------------------
    | Leave Groups
    |--------------------------------------------------------------------------
    */
    public function leaveGroups() 
    {
      if (permission::permitted('leavegroups')=='fail'){ return redirect()->route('denied'); }

      $lt = table::leavetypes()->get();
      $lg = table::leavegroup()->get();

      return view('admin.fields.leave-groups', compact('lt', 'lg'));
    }

    public function addLeaveGroups(Request $request) 
    {
      if (permission::permitted('leavegroup-add')=='fail'){ return redirect()->route('denied'); }

      $leavegroup = strtoupper($request->leavegroup); 
      $description = strtoupper($request->description);
      $status = $request->status;
      $leaveprivileges = implode(',', $request->leaveprivileges);

      if($request->leavegroup == null || $request->description == null || $request->status == null) {
        return redirect('fields/leavetype/leave-groups')->with('error', 'Whoops! Please fill the form completely!');
      }

      table::leavegroup()->insert([
        ["leavegroup" => $leavegroup, "description" => $description, "leaveprivileges" => $leaveprivileges, "status" => $status]
      ]);

      return redirect('fields/leavetype/leave-groups')->with('success', 'New Leave Group has been saved!');
    }

    public function editLeaveGroups($id) 
    {
      if (permission::permitted('leavegroup-edit')=='fail'){ return redirect()->route('denied'); }

      $lt = table::leavetypes()->get();
      $lg = table::leavegroup()->where("id", $id)->first();

      return view('admin.edits.edit-leavegroups', compact('lg', 'lt'));
    }

    public function updateLeaveGroups(Request $request) {
      if (permission::permitted('leavegroup-edit')=='fail'){ return redirect()->route('denied'); }

      $leavegroup = strtoupper($request->leavegroup); 
      $description = strtoupper($request->description);
      $status = $request->status;
      $leaveprivileges = implode(',', $request->leaveprivileges);
      $id = $request->id;

      if($request->leavegroup == null || $request->description == null || $request->status == null || $id == null) {
        return redirect('fields/leavetype/leave-groups')->with('error', 'Whoops! Please fill the form completely!');
      }

      table::leavegroup()->where('id', $id)->update([
          "leavegroup" => $leavegroup,
          "description" => $description,
          "leaveprivileges" => $leaveprivileges,
          "status" => $status
      ]);

      return redirect('fields/leavetype/leave-groups')->with('success', 'Leave group has been update!');
    }

    public function deleteLeaveGroups($id) {
      if (permission::permitted('leavegroup-delete')=='fail'){ return redirect()->route('denied'); }

      table::leavegroup()->where('id', $id)->delete();

      return redirect('fields/leavetype/leave-groups')->with('success', 'Deleted!');
    }
} 