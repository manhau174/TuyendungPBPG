<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_work extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function Post() {
    	return $this->hasMany('App\Post');
    }
}
