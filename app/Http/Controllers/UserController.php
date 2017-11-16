<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class UserController extends Controller
{
    //
    public function create() {
    	$cities = City::all();
    	return view('thongtincanhan', compact('cities'));
    }
}
