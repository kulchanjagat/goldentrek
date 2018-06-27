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

Route::get('/', function () {
    return view('frontend.index');
});

//Route::get('/admin', function () {
//    return view('backend.index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Administrator & SuperAdministrator Control Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:administrator|superadministrator'], 'namespace' => 'Admin'], function () {
    Route::get('/','DashboardController@index')->name('admin');
    Route::resource('users', 'UsersController');
    Route::resource('permission', 'PermissionController');
    Route::resource('roles', 'RolesController');
});