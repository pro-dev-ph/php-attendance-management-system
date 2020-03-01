<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
* PHP Attendance Management System
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/php-attendance-management-system
*/

Route::group(['middleware' => 'auth'], function () {

	Route::group(['middleware' => 'checkstatus'], function () {
		/*
		|--------------------------------------------------------------------------
		| Universal SmartClock 
		|--------------------------------------------------------------------------
		*/
		Route::get('clock', 'ClockController@clock');
		Route::post('attendance/add', 'ClockController@add'); 
		

		Route::group(['middleware' => 'admin'], function () {
			/*
			|--------------------------------------------------------------------------
			| Dashboard 
			|--------------------------------------------------------------------------
			*/
			Route::get('/', 'admin\DashboardController@index');
			Route::get('dashboard', 'admin\DashboardController@index')->name('dashboard');	


			/*
			|--------------------------------------------------------------------------
			| Employees 
			|--------------------------------------------------------------------------
			*/
			Route::get('employees', 'admin\EmployeesController@index')->name('employees');
			Route::get('employees/new', 'admin\EmployeesController@new');
			Route::post('employee/add',  'admin\EmployeesController@add');


			/*
			|--------------------------------------------------------------------------
			| Employee Profile 
			|--------------------------------------------------------------------------
			*/
			Route::get('profile/view/{id}', 'admin\ProfileController@view');
			Route::get('profile/delete/{id}', 'admin\ProfileController@delete');
			Route::post('profile/delete/employee', 'admin\ProfileController@clear');
			Route::get('profile/archive/{id}', 'admin\ProfileController@archive');

			// Profile Info
			Route::get('profile/edit/{id}', 'admin\ProfileController@editPerson');
			Route::post('profile/update', 'admin\ProfileController@updatePerson');


			/*
			|--------------------------------------------------------------------------
			| Employee Attendance 
			|--------------------------------------------------------------------------
			*/
			Route::get('attendance', 'admin\AttendanceController@index')->name('attendance');
			Route::get('attendance/edit/{id}', 'admin\AttendanceController@edit');
			Route::get('attendance/delete/{id}', 'admin\AttendanceController@delete');
			Route::post('attendance/update', 'admin\AttendanceController@update');

			/*
			|--------------------------------------------------------------------------
			| Employee Schedules 
			|--------------------------------------------------------------------------
			*/
			Route::get('schedules', 'admin\SchedulesController@index')->name('schedule');
			Route::post('schedules/add', 'admin\SchedulesController@add');
			Route::get('schedules/edit/{id}', 'admin\SchedulesController@edit');
			Route::post('schedules/update', 'admin\SchedulesController@update');
			Route::get('schedules/delete/{id}', 'admin\SchedulesController@delete');
			Route::get('schedules/archive/{id}', 'admin\SchedulesController@archive');


			/*
			|--------------------------------------------------------------------------
			| Employee Leaves 
			|--------------------------------------------------------------------------
			*/
			Route::get('leaves', 'admin\LeavesController@index')->name('leave');
			Route::get('leaves/edit/{id}', 'admin\LeavesController@edit');
			Route::get('leaves/delete/{id}', 'admin\LeavesController@delete');
			Route::post('leaves/update', 'admin\LeavesController@update');
			

			/*
			|--------------------------------------------------------------------------
			| Users 
			|--------------------------------------------------------------------------
			*/
			Route::get('users', 'admin\UsersController@index')->name('users');
			Route::get('users/enable/{id}', 'admin\UsersController@enable');
			Route::get('users/disable/{id}', 'admin\UsersController@disable');
			Route::get('users/edit/{id}', 'admin\UsersController@edit');
			Route::get('users/delete/{id}', 'admin\UsersController@delete');
			Route::post('users/register', 'admin\UsersController@register');
			Route::post('users/update/user', 'admin\UsersController@update');


			/*
			|--------------------------------------------------------------------------
			| Employee Users & Roles 
			|--------------------------------------------------------------------------
			*/
			Route::get('users/roles', 'admin\RolesController@index')->name('roles');
			Route::post('users/roles/add', 'admin\RolesController@add');
			Route::get('user/roles/get', 'admin\RolesController@get');
			Route::post('users/roles/update', 'admin\RolesController@update');
			Route::get('users/roles/delete/{id}', 'admin\RolesController@delete');
			Route::get('users/roles/permissions/edit/{id}', 'admin\RolesController@editperm');
			Route::post('users/roles/permissions/update', 'admin\RolesController@updateperm');

			
			/*
			|--------------------------------------------------------------------------
			| Update User 
			|--------------------------------------------------------------------------
			*/
			Route::get('update-profile', 'admin\ProfileController@viewProfile')->name('updateProfile');
			Route::get('update-password', 'admin\ProfileController@viewPassword')->name('updatePassword');
			Route::post('user/update-profile', 'admin\ProfileController@updateUser');
			Route::post('user/update-password', 'admin\ProfileController@updatePassword');


			/*
			|--------------------------------------------------------------------------
			| Reports 
			|--------------------------------------------------------------------------
			*/
			Route::get('reports', 'admin\ReportsController@index')->name('reports');
			Route::get('reports/employee-list', 'admin\ReportsController@empList');
			Route::get('reports/employee-attendance', 'admin\ReportsController@empAtten');
			Route::get('reports/individual-attendance', 'admin\ReportsController@indiAtten');
			Route::get('reports/employee-leaves', 'admin\ReportsController@empLeaves');
			Route::get('reports/individual-leaves', 'admin\ReportsController@indiLeaves');
			Route::get('reports/employee-schedule', 'admin\ReportsController@empSched');
			Route::get('reports/organization-profile', 'admin\ReportsController@orgProfile');
			Route::get('reports/employee-birthdays', 'admin\ReportsController@empBday');
			Route::get('reports/user-accounts', 'admin\ReportsController@userAccs');
			Route::get('get/employee-attendance', 'admin\ReportsController@getEmpAtten');
			Route::get('get/employee-leaves', 'admin\ReportsController@getEmpLeav');
			Route::get('get/employee-schedules', 'admin\ReportsController@getEmpSched');


			/*
			|--------------------------------------------------------------------------
			| Settings 
			|--------------------------------------------------------------------------
			*/
			Route::get('settings', 'admin\SettingsController@index')->name('settings');
			Route::post('settings/update', 'admin\SettingsController@update');


			/*
			|--------------------------------------------------------------------------
			| Application Shortcuts 
			|--------------------------------------------------------------------------
			*/
			// Company
			Route::get('fields/company/', 'admin\FieldsController@company')->name('company');
			Route::post('fields/company/add', 'admin\FieldsController@addCompany');
			Route::get('fields/company/delete/{id}', 'admin\FieldsController@deleteCompany');

			// Department
			Route::get('fields/department', 'admin\FieldsController@department')->name('department');
			Route::post('fields/department/add', 'admin\FieldsController@addDepartment');
			Route::get('fields/department/delete/{id}', 'admin\FieldsController@deleteDepartment');

			// Job Title
			Route::get('fields/jobtitle', 'admin\FieldsController@jobtitle')->name('jobtitle');
			Route::post('fields/jobtitle/add', 'admin\FieldsController@addJobtitle');
			Route::get('fields/jobtitle/delete/{id}', 'admin\FieldsController@deleteJobtitle');

			// Leave Types
			Route::get('fields/leavetype', 'admin\FieldsController@leavetype')->name('leavetype');
			Route::post('fields/leavetype/add', 'admin\FieldsController@addLeavetype');
			Route::get('fields/leavetype/delete/{id}', 'admin\FieldsController@deleteLeavetype');
			Route::get('fields/leavetype/leave-groups',  'admin\FieldsController@leaveGroups')->name('leavegroup');
			Route::post('fields/leavetype/leave-groups/add',  'admin\FieldsController@addLeaveGroups');
			Route::get('fields/leavetype/leave-groups/edit/{id}',  'admin\FieldsController@editLeaveGroups');
			Route::post('fields/leavetype/leave-groups/update',  'admin\FieldsController@updateLeaveGroups');
			Route::get('fields/leavetype/leave-groups/delete/{id}',  'admin\FieldsController@deleteLeaveGroups');


			/*
			|--------------------------------------------------------------------------
			| Exports : Employee data 
			|--------------------------------------------------------------------------
			*/
			// export
			Route::get('export/fields/company', 'admin\ExportsController@company');
			Route::get('export/fields/department', 'admin\ExportsController@department');
			Route::get('export/fields/jobtitle', 'admin\ExportsController@jobtitle');
			Route::get('export/fields/leavetypes', 'admin\ExportsController@leavetypes');
			
			// import
			Route::post('import/fields/company', 'admin\ImportsController@importCompany');
			Route::post('import/fields/department', 'admin\ImportsController@importDepartment');
			Route::post('import/fields/jobtitle', 'admin\ImportsController@importJobtitle');
			Route::post('import/fields/leavetypes', 'admin\ImportsController@importLeavetypes');

			// reports export
			Route::get('export/report/employees', 'admin\ExportsController@employeeList');
			Route::post('export/report/attendance', 'admin\ExportsController@attendanceReport');
			Route::post('export/report/leaves', 'admin\ExportsController@leavesReport');
			Route::get('export/report/birthdays', 'admin\ExportsController@birthdaysReport');
			Route::get('export/report/accounts', 'admin\ExportsController@accountReport');
			Route::post('export/report/schedule', 'admin\ExportsController@scheduleReport');
		});

		Route::group(['middleware' => 'employee'], function () {
			/*
			|--------------------------------------------------------------------------
			| Employee Frontend : Dashboard, Profile, Attendance, Schedules, Leaves, Settings
			|--------------------------------------------------------------------------
			*/
			// dashboard 
			Route::get('personal/dashboard', 'personal\PersonalDashboardController@index');

			// profile 
			Route::get('personal/profile/view', 'personal\PersonalProfileController@index')->name('myProfile');
			Route::get('personal/profile/edit/', 'personal\PersonalProfileController@profileEdit');
			Route::post('personal/profile/update', 'personal\PersonalProfileController@profileUpdate');

			// attendance 
			Route::get('personal/attendance/view', 'personal\PersonalAttendanceController@index');
			Route::get('get/personal/attendance', 'personal\PersonalAttendanceController@getPA');

			// schedules 
			Route::get('personal/schedules/view', 'personal\PersonalSchedulesController@index');
			Route::get('get/personal/schedules', 'personal\PersonalSchedulesController@getPS');

			// leaves 
			Route::get('personal/leaves/view', 'personal\PersonalLeavesController@index')->name('viewPersonalLeave');
			Route::get('personal/leaves/edit/{id}', 'personal\PersonalLeavesController@edit');
			Route::post('personal/leaves/update', 'personal\PersonalLeavesController@update');
			Route::post('personal/leaves/request', 'personal\PersonalLeavesController@requestL');
			Route::get('personal/leaves/delete/{id}', 'personal\PersonalLeavesController@delete');
			Route::get('get/personal/leaves', 'personal\PersonalLeavesController@getPL');
			Route::get('view/personal/leave', 'personal\PersonalLeavesController@viewPL');

			// settings 
			Route::get('personal/settings', 'personal\PersonalSettingsController@index');

			// user 
			Route::get('personal/update-user', 'personal\PersonalAccountController@viewUser')->name('changeUser');
			Route::get('personal/update-password', 'personal\PersonalAccountController@viewPassword')->name('changePass');
			Route::post('personal/update/user', 'personal\PersonalAccountController@updateUser');
			Route::post('personal/update/password', 'personal\PersonalAccountController@updatePassword');
		});

	});

});


Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::view('permission-denied', 'errors.permission-denied')->name('denied');
Route::view('account-disabled', 'errors.account-disabled')->name('disabled');
Route::view('account-not-found', 'errors.account-not-found')->name('notfound');