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

use App\Permissions;
use Auth;

Class permission {

    public static $perms = [
        1 => 'dashboard',
        2 => 'employees',
            21 => 'employees-add',
            22 => 'employees-view',
            23 => 'employees-edit',
            24 => 'employees-delete',
            25 => 'employees-archive',
        3 => 'attendance',
            31 => 'attendance-edit',
            32 => 'attendance-delete',
        4 => 'schedules',
            41 => 'schedules-add',
            42 => 'schedules-edit',
            43 => 'schedules-delete',
            44 => 'schedules-archive',
        5 => 'leaves',
            51 => 'leaves-add',
            52 => 'leaves-edit',
            53 => 'leaves-delete',
        // 6 => 'payroll',
            // 61 => 'payroll-edit',
        7 => 'reports',
        8 => 'users',
            81 => 'users-add',
            82 => 'users-edit',
            83 => 'users-delete',
        9 => 'settings',
            91 => 'settings-update',
        10 => 'roles',
            101 => 'roles-add',
            102 => 'roles-edit',
            103 => 'roles-permission',
            104 => 'roles-delete',
        11 => 'company',
            111 => 'company-add',
            112 => 'company-delete',
        12 => 'departments',
            121 => 'departments-add',
            122 => 'departments-delete',
        13 => 'jobtitles',
            131 => 'jobtitles-add',
            132 => 'jobtitles-delete',
        14 => 'leavetypes',
            141 => 'leavetypes-add',
            142 => 'leavetypes-delete',
        15 => 'leavegroups',
            151 => 'leavegroup-add',
            152 => 'leavegroup-edit',
            153 => 'leavegroup-delete',
    ];

    public static function permitted($page) {
        $role = \Auth::user()->role_id;
        $perms=self::$perms;
        $permid = array_search($page, $perms);

        $permcheck = Permissions::where('role_id', $role)->where('perm_id', $permid)->first();

        if ($permcheck==NULL) {
            return "fail";
        } else {
            if ($permcheck->perm_id<0) {
                return "fail";
            } else { 
                return "success";
            }
        }
    }

}