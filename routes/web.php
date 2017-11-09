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
    return view('layout.header');
});
Route::get('blog',function(){
	return view('layout.welcome');
});
Route::get('job',function(){
	return view('detailJob');
});
Route::get('pg',function(){
	return view('detailPG');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
	Route::get('/', function(){return view('admin.adminWelcome');})->name('admin.home');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout.submit');
	// Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout.submit');
	Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
	Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});


// Route::get('admin/login', 'Admin\LoginController@getLogin');
// Route::post('admin/login', 'Admin\LoginController@postLogin')->name('admin/login');

// Route::get('admin/register', 'Admin\RegisterController@getRegister');
// Route::post('admin/register', 'Admin\RegisterController@postRegister')->name('admin/register');

// Route::get('admin/dashboard', 'AdminController@index');
