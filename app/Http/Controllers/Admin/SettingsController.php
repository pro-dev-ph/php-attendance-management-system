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
use Auth;
use App\Classes\table;
use App\Classes\permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SettingsController extends Controller
{
    public function index(Request $request) 
    {
        if (permission::permitted('settings')=='fail'){ return redirect()->route('denied'); }
        $data = table::settings()->where('id', 1)->first();
        
    	return view('admin.settings', compact('data'));
    }

    public function update(Request $request) 
    {
        if (permission::permitted('settings-update')=='fail'){ return redirect()->route('denied'); }
        
        $country = $request->country;
        $timezone = $request->timezone;
        $clock_comment = $request->clock_comment;
        $iprestriction = $request->iprestriction;
        $a_email = $request->email;
        $a_phone = $request->phone;
        
        if ($country == null && $timezone == null && $a_email == null && $a_phone == null && $clock_comment == null && $iprestriction == null) {
            return redirect('settings');
        }

        if ($timezone == null) {
            return redirect('settings')->with('error', 'Please select your timezone.');
        } else {
            $t = table::settings()->where('id', 1)->value('timezone');
            $path = base_path('.env');
            if(file_exists($path)) {
                file_put_contents($path, str_replace('APP_TIMEZONE='.$t, 'APP_TIMEZONE='.$timezone, file_get_contents($path)));
            }
        }

        table::settings()
        ->where('id', 1)
        ->update([
                'country' => $country,
                'timezone' => $timezone,
                'admin_email' => $a_email,
                'admin_phone' => $a_phone,
                'clock_comment' => $clock_comment,
                'iprestriction' => $iprestriction,
        ]);
        
        return redirect('settings')->with('success', 'Settings has been updated. Please try re-login for the new settings to take effect.');
    }

}
