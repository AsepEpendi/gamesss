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

Auth::routes();
Route::get('/', 'Web\HomeController@index')->name('web.index');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::resource('user', 'UserController');
    Route::get('users/{user}/update-password', 'UserController@resetPass')->name('user.resetpass');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::resource('module', 'ModuleController');
});


