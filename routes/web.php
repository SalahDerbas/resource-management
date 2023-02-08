<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {

Route::get('/Board','HomeController@Board')->name('Board');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Employees', 'EmployeeController');
Route::post('/Employees/search','EmployeeController@search')->name('Employees.search');
Route::post('/Employees/upload','EmployeeController@upload')->name('Employees.upload');

Route::resource('Attendances', 'AttendanceController');
Route::resource('Companys', 'CompanyController');

Route::resource('Departments', 'DepartmentController');
Route::post('/Departments/search','DepartmentController@search')->name('Departments.search');

Route::resource('Designations', 'DesignationController');
Route::post('/Designations/search','DesignationController@search')->name('Designations.search');

Route::resource('Events', 'EventController');
Route::resource('Holidays', 'HolidayController');
Route::resource('Leaves', 'LeaveController');
Route::resource('Meetings', 'MeetingController');
Route::resource('Performances', 'PerformanceController');
Route::resource('Projects', 'ProjectController');
Route::resource('PushNotifications', 'PushNotificationController');
Route::resource('Reports', 'ReportController');
Route::resource('Roles', 'RoleController');
Route::resource('Settings', 'SettingController');
Route::resource('Tasks', 'TaskController');
Route::resource('Tickets', 'TicketController');

});