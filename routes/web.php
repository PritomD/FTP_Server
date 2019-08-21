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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');

//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('member/index', 'HomeController@memberhome')->name('member.index');

Route::get('admin/index', 'AdminController@index')->name('admin.signup');
Route::post('admin/index', 'AdminController@store');

Route::get('admin/home', 'AdminController@home')->name('admin.home');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile', 'ProfileController@update');

Route::get('user-management/uploadbal', 'UserManagementController@balance')->name('user-management.uploadbal');
Route::post('user-management/uploadbal', 'UserManagementController@uploadbal');
Route::resource('user-management', 'UserManagementController');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('employee-management', 'EmployeeManagementController');
Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');

Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');

Route::post('/flightSearch', 'FlightController@Search');
Route::post('/hotelSearch', 'HotelController@Search');