<?php
/*
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
*/
namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $type = \Auth::user()->acc_type;
        // Admin only
        if ($type == '2'){
            // nothing
        } else {
            Auth::logout();
            return redirect()->route('denied');
        }

        return $next($request);
    }
}
