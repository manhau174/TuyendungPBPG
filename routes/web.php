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
    return view('home');
})->name('home');
Route::get('/login1', function(){
	return view('login');
});
Route::get('/test', function(){
	return view('test');
});
Route::get('job',function(){
	return view('detailJob');
});
Route::get('pg',function(){
	return view('detailPG');
});
Route::get('create', 'UserController@create')->name('create');
Route::get('post',function(){
	return view('post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
	Route::get('/', function(){return view('admin.adminWelcome');})->name('admin.home');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout.submit');
	Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
	Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

