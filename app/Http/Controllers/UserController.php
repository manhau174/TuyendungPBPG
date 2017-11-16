<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function getAll(){
		$users = User::getAll();
		dd($users);
		return view('home', ['users' => $users]);
	}
}
