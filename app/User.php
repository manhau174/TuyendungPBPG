<?php

namespace App;
use DB;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','birthday','mobile','gender','address','city_id','job_id','form_work_id','level','school','exp','avatar','profile_images', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getAll(){
        return DB::table('users')->get();
    }
    public function post() {
        return $this->hasMany('app\Post');
    }

    public function City() {
        return $this->belongsTo('App\City');
    }
}
