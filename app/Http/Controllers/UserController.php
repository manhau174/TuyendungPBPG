<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use App\User;
class UserController extends Controller
{
    //
    public function create() {
    	$cities = City::all();
    	return view('thongtincanhan', compact('cities'));

    }
    public function getAll(){
		$users = User::getAll();
		dd($users);
		return view('home', ['users' => $users]);
	}
}

