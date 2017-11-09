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
