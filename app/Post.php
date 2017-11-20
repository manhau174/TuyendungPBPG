<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['job_id', 'city_id', 'form_work_id', 'quantity', 'title', 'salary_min', 'salary_max', 'description', 'benefit', 'guide', 'address', 'exp', 'job_content_id', 'mobile', 'skin', 'company'];
    public function JobContent() {
    	return hasOne('App\Job_content');
    }
}
