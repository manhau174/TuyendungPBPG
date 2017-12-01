<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use App\User;
class UserController extends Controller
{
    //
    public function profile() {
    	$cities = City::all();
    	return view('user.profile', compact('cities'));

    }
    public function getAll(){
		$users = User::getAll();
		dd($users);
		return view('home', ['users' => $users]);
	}
    public function update(Request $request) {
        $data = $request->all();
        dd($data);
    }
}

