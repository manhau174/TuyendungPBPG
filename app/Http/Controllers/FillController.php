<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
class FillController extends Controller
{
    //
    public function fill($job_slug, $job_content_slug){
    	$job = Job::where('slug', $job_slug)->first();
    	$posts = $job->post;
    	return view('homeFill', compact('posts'));
    }
}
