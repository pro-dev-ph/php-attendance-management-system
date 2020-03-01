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


class LeavesController extends Controller
{
    public function index() 
    {
        if (permission::permitted('leaves')=='fail'){ return redirect()->route('denied'); }

        $employee = table::people()->join('tbl_company_data', 'tbl_people.id', '=', 'tbl_company_data.reference')->get();
        $leaves = table::leaves()->get();
        $leave_types = table::leavetypes()->get();

        return view('admin.leaves', compact('employee', 'leaves', 'leave_types'));
    }

    public function edit($id, Request $request) {
        if (permission::permitted('leaves-edit')=='fail'){ return redirect()->route('denied'); }

        $id = $request->id;
        $l = table::leaves()->where('id', $id)->first();
        $l->leavefrom = date('M d, Y', strtotime($l->leavefrom));
        $l->leaveto = date('M d, Y', strtotime($l->leaveto));
        $l->returndate = date('M d, Y', strtotime($l->returndate));
        $leave_types = table::leavetypes()->get();
        
        return view('admin.edits.edit-leaves', compact('id', 'l', 'leave_types'));
    }

    public function update(Request $request)
    {
        if (permission::permitted('leaves-edit')=='fail'){ return redirect()->route('denied'); }

        if ($request->id == null || $request->status == null || $request->comment == null) {
            return redirect('leaves')->with('error', 'Whoops! Please fill the form completely!');
        }

        $id = $request->id;
        $status = $request->status;
        $comment = mb_strtoupper($request->comment);

        table::leaves()
        ->where('id', $id)
        ->update([
                    'status' => $status,
                    'comment' => $comment
        ]);

        return redirect('/leaves')->with('success','Employee leave has been updated!');
    }


    public function delete($id)
    {
        if (permission::permitted('leaves-delete')=='fail'){ return redirect()->route('denied'); }

        table::leaves()->where('id', $id)->delete();

        return redirect('leaves')->with('success','Deleted!');
    }

}
