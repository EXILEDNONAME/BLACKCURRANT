<?php

use Illuminate\Support\Facades\Route;

// DASHBOARD
Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/file-manager', [App\Http\Controllers\Backend\DashboardController::class, 'file_manager'])->name('dashboard.file-manager');
Route::get('dashboard/logout', [App\Http\Controllers\Backend\DashboardController::class, 'logout'])->name('dashboard.logout');

// SETTINGS - PROFILES
Route::group([
  'as' => 'dashboard.system.setting.profile.',
  'prefix' => 'dashboard/settings/profiles',
  'namespace' => 'App\Http\Controllers\Backend\__System\Setting',
  'middleware' => 'auth',
], function () {
  Route::get('/', 'ProfileController@index')->name('index');
  Route::get('account-informations', 'ProfileController@account_information')->name('account-information');
  Route::patch('account-informations/update/{id}', 'ProfileController@account_information_update')->name('account-information-update');
  Route::get('change-password', 'ProfileController@change_password')->name('change-password');
  Route::post('update-password', 'ProfileController@update_password')->name('update-password');
});

// ADMINISTRATIVE - SESSIONS
Route::group([
  'as' => 'dashboard.system.administrative.sessions.',
  'prefix' => 'dashboard/administrative/sessions',
  'namespace' => 'App\Http\Controllers\Backend\__System\Administrative',
  'middleware' => 'auth',
], function () {
  Route::get('reset', 'SessionController@reset')->name('reset');
  Route::get('/', 'SessionController@index');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/templates', function () {
    return view('layouts.default');
});

Route::get('/datatables', function () {
    return view('layouts.template.datatable.index');
});

// APPLICATIONS - DATATABLES
Route::group([
  'as' => 'dashboard.application.datatable.',
  'prefix' => 'dashboard/applications/datatables',
  'namespace' => 'App\Http\Controllers\Backend\__Application\Datatable',
  'middleware' => 'auth',
], function () {
  Route::get('active/{id}', 'GeneralController@active')->name('active');
  Route::get('activities', 'GeneralController@activity')->name('activity');
  Route::get('delete/{id}', 'GeneralController@delete')->name('delete');
  Route::get('delete-permanent/{id}', 'GeneralController@delete_permanent')->name('delete-permanent');
  Route::get('inactive/{id}', 'GeneralController@inactive')->name('inactive');
  Route::get('selected-active', 'GeneralController@selected_active')->name('selected-active');
  Route::get('selected-inactive', 'GeneralController@selected_inactive')->name('selected-inactive');
  Route::get('selected-delete', 'GeneralController@selected_delete')->name('selected-delete');
  Route::get('selected-delete-permanent', 'GeneralController@selected_delete_permanent')->name('selected-delete-permanent');
  Route::get('restore/{id}', 'GeneralController@restore')->name('restore');
  Route::get('selected-restore', 'GeneralController@selected_restore')->name('selected-restore');
  Route::get('trash', 'GeneralController@trash')->name('trash');
  Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
});

// ADMINISTRATIVE - MANAGEMENT ACCESSES
Route::group([
  'as' => 'dashboard.system.administrative.management.accesses.',
  'prefix' => 'dashboard/administrative/managements/accesses',
  'namespace' => 'App\Http\Controllers\Backend\__System\Administrative\Management',
  'middleware' => 'auth',
], function () {
  Route::get('active/{id}', 'AccessController@active')->name('active');
  Route::get('activities', 'AccessController@activity')->name('activity');
  Route::get('inactive/{id}', 'AccessController@inactive')->name('inactive');
  Route::get('delete/{id}', 'AccessController@delete')->name('delete');
  Route::get('delete-permanent/{id}', 'AccessController@delete_permanent')->name('delete-permanent');
  Route::get('restore/{id}', 'AccessController@restore')->name('restore');
  Route::get('trash', 'AccessController@trash')->name('trash');
  Route::get('selected-active', 'AccessController@selected_active')->name('selected-active');
  Route::get('selected-inactive', 'AccessController@selected_inactive')->name('selected-inactive');
  Route::get('selected-delete', 'AccessController@selected_delete')->name('selected-delete');
  Route::get('selected-delete-permanent', 'AccessController@selected_delete_permanent')->name('selected-delete-permanent');
  Route::get('selected-restore', 'AccessController@selected_restore')->name('selected-restore');
  Route::resource('/', 'AccessController')->parameters(['' => 'id']);
});

// ADMINISTRATIVE - MANAGEMENT ROLES
Route::group([
  'as' => 'dashboard.system.administrative.management.roles.',
  'prefix' => 'dashboard/administrative/managements/roles',
  'namespace' => 'App\Http\Controllers\Backend\__System\Administrative\Management',
  'middleware' => 'auth',
], function () {
  Route::get('active/{id}', 'RoleController@active')->name('active');
  Route::get('activities', 'RoleController@activity')->name('activity');
  Route::get('inactive/{id}', 'RoleController@inactive')->name('inactive');
  Route::get('delete/{id}', 'RoleController@delete')->name('delete');
  Route::get('delete-permanent/{id}', 'RoleController@delete_permanent')->name('delete-permanent');
  Route::get('restore/{id}', 'RoleController@restore')->name('restore');
  Route::get('trash', 'RoleController@trash')->name('trash');
  Route::get('selected-active', 'RoleController@selected_active')->name('selected-active');
  Route::get('selected-inactive', 'RoleController@selected_inactive')->name('selected-inactive');
  Route::get('selected-delete', 'RoleController@selected_delete')->name('selected-delete');
  Route::get('selected-delete-permanent', 'RoleController@selected_delete_permanent')->name('selected-delete-permanent');
  Route::get('selected-restore', 'RoleController@selected_restore')->name('selected-restore');
  Route::resource('/', 'RoleController')->parameters(['' => 'id']);
});

// ADMINISTRATIVE - MANAGEMENT USERS
Route::group([
  'as' => 'dashboard.system.administrative.management.users.',
  'prefix' => 'dashboard/administrative/managements/users',
  'namespace' => 'App\Http\Controllers\Backend\__System\Administrative\Management',
  'middleware' => 'auth',
], function () {
  Route::get('active/{id}', 'UserController@active')->name('active');
  Route::get('activities', 'UserController@activity')->name('activity');
  Route::get('inactive/{id}', 'UserController@inactive')->name('inactive');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('delete-permanent/{id}', 'UserController@delete_permanent')->name('delete-permanent');
  Route::get('restore/{id}', 'UserController@restore')->name('restore');
  Route::get('trash', 'UserController@trash')->name('trash');
  Route::get('selected-active', 'UserController@selected_active')->name('selected-active');
  Route::get('selected-inactive', 'UserController@selected_inactive')->name('selected-inactive');
  Route::get('selected-delete', 'UserController@selected_delete')->name('selected-delete');
  Route::get('selected-delete-permanent', 'UserController@selected_delete_permanent')->name('selected-delete-permanent');
  Route::get('selected-restore', 'UserController@selected_restore')->name('selected-restore');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});
