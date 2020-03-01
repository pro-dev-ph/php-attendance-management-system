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


class UsersController extends Controller
{
    public function index()
    {
        if (permission::permitted('users')=='fail'){ return redirect()->route('denied'); }

        $users_roles = table::users()->join('users_roles', 'users.role_id', '=', 'users_roles.id')->select('users.*', 'users_roles.role_name')->get();
        $users = table::users()->get();
        $roles = table::roles()->get();
        $employees = table::people()->get();

        return view('admin.users', compact('users', 'roles', 'employees', 'users_roles'));
    }

    public function register(Request $request)
    {
        if (permission::permitted('users-add')=='fail'){ return redirect()->route('denied'); }

        $ref = $request->ref;
        $name = $request->name;
    	$email = $request->email;
		$role_id = $request->role_id;
		$acc_type = $request->acc_type;
		$password = $request->password;
		$password_confirmation = $request->password_confirmation;
		$status = $request->status;

		if ($name == null || $email == null || $status == null || $password == null || $acc_type == null) {
        	return redirect('users')->with('error', 'Whoops! Please fill the form completely!');
    	}

        if ($password != $password_confirmation) {
            return redirect('users')->with('error', 'Whoops! Password confirmation does not match!');
        }

        $is_user_exist = table::users()->where('email', $email)->count();
        if($is_user_exist >= 1) {
            return redirect('users')->with('error', 'Whoops! this user already exist');
        }

        $idno = table::companydata()->where('reference', $ref)->value('idno');

    	table::users()->insert([
    		[
                'reference' => $ref,
                'idno' => $idno,
				'name' => $name,
				'email' => $email,
				'role_id' => $role_id,
				'acc_type' => $acc_type,
				'password' => Hash::make($password),
				'status' => $status,
            ],
    	]);

    	return redirect('/users')->with('success','New User has been added.');
    }

    public function edit($id) {
        if (permission::permitted('users-edit')=='fail'){ return redirect()->route('denied'); }
        
        $u = table::users()->where('id', $id)->first();
        $r = table::roles()->get();

        return view('admin.edits.edit-user', compact('u', 'r'));
    }

    public function update(Request $request) {
        if (permission::permitted('users-edit')=='fail'){ return redirect()->route('denied'); }
        $ref = $request->ref;
		$role_id = $request->role_id;
		$acc_type = $request->acc_type;
        $status = $request->status;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if ($role_id == null || $status == null || $acc_type == null) {
        	return redirect('users')->with('error', 'Whoops! Please fill the form completely!');
        }

        if ($password !== null && $password_confirmation !== null) {
            if ($password != $password_confirmation) {
                return redirect('users')->with('error', 'Whoops! Password confirmation does not match!');
            }

            table::users()->where('reference', $ref)->update([
                'role_id' => $role_id,
                'acc_type' => $acc_type,
                'status' => $status,
                'password' => Hash::make($password),
            ]);
        } else {
            table::users()->where('reference', $ref)->update([
                'role_id' => $role_id,
                'acc_type' => $acc_type,
                'status' => $status,
            ]);
        }

    	return redirect('users')->with('success','User Account has been updated!');       
    }

    public function delete($id)
    {
        if (permission::permitted('users-delete')=='fail'){ return redirect()->route('denied'); }

    	table::users()->where('id', $id)->delete();
    	return redirect('users')->with('success','User Account has been deleted!');
    }
}
