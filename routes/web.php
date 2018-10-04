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
Route::middleware('auth')->group(function() {
	Route::get('/', 'Table\TableController@index');
	Route::get('/login', 'Auth\LoginController@login');
	Route::get('admin/users', 'Admin\UserController@index')->name('admin.user.index');
	Route::get('admin/users/add', 'Admin\UserController@list')->name('admin.user.add');
	Route::get('admin/users/remove/{id}', 'Admin\UserController@list')->name('admin.user.remove');
});
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');