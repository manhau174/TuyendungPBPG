<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Job;
use App\City;
use Auth;
class PostController extends Controller
{
    //
    public function create() {
    	return view('post.create');
    }

    public function store(Request $request) {
    	$data = $request->all();
        $date = $data['deadline'];
        $data['deadline'] = date("Y-m-d", strtotime($date));
    	$city = City::find($data['city_id']);
    	$data['title'] = $data['company'] ." tuyển dụng " .$data['vacancy'] ." - " . $city->name;
    	$data['slug'] = str_slug($data['title']);
        $data['user_id'] = Auth::user()->id;
    	Post::create($data);
        return redirect()->home();
    }

    public function detail($slug) {
        $post = Post::where('slug', $slug)->get()->first();
        return view('post.detail', compact('post'));
    }
    public function list() {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get();
        return view('post.list', compact('posts'));
    }
}
