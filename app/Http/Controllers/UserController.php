<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use App\User;
use Auth;
class UserController extends Controller
{
    //
    public function profile() {
    	$cities = City::all();
    	return view('user.profile', compact('cities'));

    }
    public function getAll(){
		$users = User::getAll();
		return view('home', ['users' => $users]);
	}
    public function preview($slug) {
        $user = User::where('slug', $slug)->first();
        $user['birthday']  = date('d-m-Y', strtotime($user['birthday']));
        if ($user['gender'] == 1) {
            $user['gender'] = 'Nam';
        }
        elseif ($user['gender'] == 0) {
            $user['gender'] = 'Nữ';
        }
           

        return view('user.preview',compact('user'));
    }
    public function update(Request $request, $id) {
        $data = $request->all();
        $data['birthday'] = date("Y-m-d", strtotime($data['birthday']));
        dd($data);
        // $data['slug'] = str_slug(Auth::user()->name);
        User::find($id)->update($data);
        return redirect()->route('user.preview', ['id' => Auth::user()->id]);
    }
}

