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


class RolesController extends Controller
{
    public function index(Request $request) 
    {
        if (permission::permitted('roles')=='fail'){ return redirect()->route('denied'); }
        
        $roles = table::roles()->get();
        
    	return view('admin.employee-roles', compact('roles'));
    }

    public function add(Request $request) 
    {
        if (permission::permitted('roles-add')=='fail'){ return redirect()->route('denied'); }

    	$role_name = mb_strtoupper($request->role_name);
    	$state = $request->state;

		if($role_name == null && $state == null) {
			return redirect('users/roles')->with('error', 'Whoops! Please fill the form completely!');
		}

    	table::roles()->insert([
    		[
				'role_name' => $role_name,
				'state' => $state
            ],
    	]);

    	return redirect('users/roles')->with('success', 'User role saved successfuly');
    }


    public function delete($id) 
    {
        if (permission::permitted('roles-delete')=='fail'){ return redirect()->route('denied'); }

        table::roles()->where('id', $id)->delete();

        return redirect('users/roles')->with('success','User role has been deleted!');
    }

    public function edit($id, Request $request) 
    {
        if (permission::permitted('roles-edit')=='fail'){ return redirect()->route('denied'); }

        $role_name = mb_strtoupper($request->role_name);
        $state = $request->state;

        if($role_name == null && $state == null) {
            return redirect('users/roles')->with('error', 'Whoops! Please fill the form completely!');
        }

        table::roles()->where('id', $id)->update(['role_name' => $role_name,'state' => $state]);

        return redirect('users/roles')->with('success', 'User role has been updated!');
    }

    public function get(Request $request) 
    {
        if (permission::permitted('roles-edit')=='fail'){ return redirect()->route('denied'); }

        $id = $request->id;
        $data = table::roles()->where('id', $id)->get();

        foreach ($data as $d) {
            $id = $d->id;
            $role_name = $d->role_name;
            $state = $d->state;
        }

        return response()->json([
            "id" => $id,
            "role_name" => $role_name,
            "state" => $state,
        ]);
    }

    public function update(Request $request) 
    {
        if (permission::permitted('roles-edit')=='fail'){ return redirect()->route('denied'); }

        $id = $request->id;
        $role_name = mb_strtoupper($request->role_name);
        $state = $request->state;

        if($role_name == null && $state == null) {
            return redirect('users/roles')->with('error', 'Whoops! Please fill the form completely!');
        }

        table::roles()->where('id', $id)->update([
            'role_name' => $role_name,
            'state' => $state
        ]);

        return redirect('users/roles')->with('success', 'User role has been updated!');
    }

    public function editperm($id) 
    {
        if (permission::permitted('roles-permission')=='fail'){ return redirect()->route('denied'); }

    	$data = table::permissions()->where('role_id', $id)->pluck('perm_id');
        
    	return view('admin.edits.edit-permissions', ['d' => $data->toArray(), 'id' => $id]);
    }

    public function updateperm(Request $request) {
        if (permission::permitted('roles-permission')=='fail'){ return redirect()->route('denied'); }

        $perms = $request->perms;
        $role_id = $request->role_id;

        table::permissions()->where('role_id', $role_id)->delete();

        if(isset($perms)){
            foreach($perms as $perm){
                table::permissions()->insert([
                    [
                        'role_id' => $role_id,
                        'perm_id' => $perm
                    ],
                ]);
            }
        }

        return redirect('users/roles/')->with('success', 'User permission has been updated!');
    }

}
