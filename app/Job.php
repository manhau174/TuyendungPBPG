<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    public function Post() {
    	return $this->hasMany('App\Post');
    }
}
