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
	//users
	Route::get('/', 'Admin\UserController@dashboard');
	Route::get('admin', 'Admin\UserController@dashboard')->name('admin.dashboard');
	Route::get('admin/users', 'Admin\UserController@index')->name('admin.user');
	Route::get('admin/users/register', 'Admin\UserController@register')->name('admin.user.register');
	Route::post('admin/users/signup', 'Admin\UserController@signup')->name('admin.user.signup');
	Route::get('admin/users/remove/{id}', 'Admin\UserController@remove')->name('admin.user.remove');
	//masters
	//menu categories
	Route::get('admin/menucategories', 'Admin\MenuController@menulist')->name('admin.menucategory');
	Route::get('admin/menucategories/add', 'Admin\MenuController@menuadd')->name('admin.menucategory.add');
	Route::post('admin/menucategories/addpost', 'Admin\MenuController@menuaddpost')->name('admin.menucategory.addpost');
	Route::get('admin/menucategories/edit/{id}', 'Admin\MenuController@menuedit')->name('admin.menucategory.edit');
	Route::post('admin/menucategories/editpost', 'Admin\MenuController@menueditpost')->name('admin.menucategory.editpost');
	Route::get('admin/menucategories/remove/{id}', 'Admin\MenuController@menuremove')->name('admin.menucategory.remove');
	//categories
	Route::resource('admin/categories', 'Admin\CategoryController');
	//items
	Route::resource('admin/items', 'Admin\ItemController');
	Route::resource('admin/badges', 'Admin\BadgeController');
	Route::resource('admin/sauces', 'Admin\SauceController');
});
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');