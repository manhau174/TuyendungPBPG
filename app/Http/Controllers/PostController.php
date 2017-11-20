<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Job;
use App\City;

class PostController extends Controller
{
    //
    public function create() {
    	return view('post.create');
    }

    public function store(Request $request) {
    	$data = $request->all();
    	$job = Job::find($data['job_id']);
    	$city = City::find($data['city_id']);
    	$data['title'] = $data['company'] ." tuyển dụng " .$job->name ." - " . $city->name;
    	$data['slug'] = str_slug($data['title']);
    	dd($data['slug']);

    	Post::create($data);
    }
}
