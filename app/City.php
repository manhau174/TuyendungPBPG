<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public function Post() {
    	return $this->hasMany('App\Post');
    }
}
