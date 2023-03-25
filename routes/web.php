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


Route::get('/', ['as' => 'sign_up', 'uses' => 'RegisterController@index']);
Route::post('do-sign-up', ['as' => 'do_sign_up', 'uses' => 'RegisterController@doSignup']);

Route::group(['prefix' => '/', 'namespace' => 'Auth'], function () {
    Route::get('admin', ['as' => 'admin.login', 'uses' => 'LoginController@login']);
    Route::get('staff', ['as' => 'staff.login', 'uses' => 'LoginController@login']);
    Route::get('developers', ['as' => 'developers.login', 'uses' => 'LoginController@login']);
    Route::post('verify-login', ['as' => 'login.submit', 'uses' => 'LoginController@loginAction']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);
});

Route::group(['middleware' => 'admin_auth','prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);
   
});
Route::group(['middleware' => 'staff_auth','prefix' => 'staff', 'namespace' => 'Staff'], function () {
    Route::get('dashboard', ['as' => 'staff.dashboard', 'uses' => 'StaffController@index']);
});
Route::group(['middleware' => 'developer_auth','prefix' => 'developers', 'namespace' => 'Developers'], function () {
    Route::get('dashboard', ['as' => 'developers.dashboard', 'uses' => 'DeveloperController@index']);
});

