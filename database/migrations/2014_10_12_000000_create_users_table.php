<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('mobile',20)->nullable();
            $table->boolean('gender')->nullable();
            // $table->string('address',100)->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('form_work_id')->nullable();
            $table->string('level',100)->nullable();
            $table->string('school', 100)->nullable();
            $table->string('exp', 200)->nullable();
            $table->string('avatar')->nullable();
            $table->string('profile_images')->nullable();        
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
