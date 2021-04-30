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
    Route::put('edit-profile', 'UserController@editprofile')->name('update.profile');
    Route::put('change-password', 'UserController@updatePassAccount')->name('update.password-profile');
    Route::resource('user', 'UserController');
    Route::get('users/{user}/reset-password', 'UserController@resetPass')->name('user.resetpass');
    Route::post('user/reset-password/{user}', 'UserController@updatePass')->name('reset.password');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::post('attach-permission/{role_id}', 'PermissionController@attachPermission')->name('permission.attach');
    Route::post('dettach-permission/{role_id}', 'PermissionController@dettachPermission')->name('permission.dettach');
    Route::resource('module', 'ModuleController');
    Route::resource('pengaturan', 'SettingsController');
    Route::post('company-settings', 'SettingsController@CompanySettings')->name('company.setting');
    Route::post('social-media', 'SettingsController@SosmedSettings')->name('sosmed.setting');
    Route::post('email-settings', 'SettingsController@EmailSettings')->name('email.setting');
    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::resource('banner', 'BannerController');
    Route::resource('post', 'PostController');
    Route::resource('e-sport-category', 'ESportCategoryController');
    Route::resource('e-sport-team', 'ESportTeamController');
    Route::resource('channel', 'ChannelController');
    Route::resource('schedule', 'ScheduleController');
});
// Route::get('match', 'Web\WebController@match')->name('web.match');
Route::get('matches-list', 'Web\WebController@matches')->name('web.matches');
Route::get('/match/{slug}', 'Web\WebController@match')->name('web.match');

