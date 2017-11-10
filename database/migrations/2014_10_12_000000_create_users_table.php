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
            $table->string('address',100)->nullable();
            $table->string('mobile',20);
            $table->boolean('gender');
            $table->integer('city_id');
            $table->integer('job_id')->nullable();
            $table->string('level',100)->nullable();
            $table->string('exp', 200)->nullable();
            $table->string('avatar');
            $table->string('profile_images')->nullable();
            $table->integer('permission');
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
