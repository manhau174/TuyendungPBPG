<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['job_id', 'city_id', 'form_work_id', 'quantity', 'title', 'salary_min', 'salary_max', 'description', 'benefit', 'guide', 'address', 'exp', 'vacancy', 'mobile', 'skin', 'company', 'slug','mobile','deadline','email', 'user_id'];
    public function JobContent() {
    	return $this->belongsTo('App\Job_content');
    }

    public function Job() {
    	return $this->belongsTo('App\Job');
    }

    public function City() {
    	return $this->belongsTo('App\City');
    }

    public function Form_work() {
    	return $this->belongsTo('App\Form_work');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}
