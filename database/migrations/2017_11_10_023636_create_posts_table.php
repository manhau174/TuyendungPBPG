<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('vacancy', 250);
            $table->integer('city_id');
            $table->integer('quantity');
            $table->integer('job_id');        
            $table->integer('form_work_id');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->text('exp', 250);
            $table->text('description');
            $table->string('skin', 200);
            $table->string('benefit')->nullable();
            $table->string('company', 200);
            $table->string('email');
            $table->string('address', 250);
            $table->string('mobile', 20);
            $table->date('deadline');        
            $table->string('guide')->nullable();                                         
            $table->string('title', 100);
            $table->string('slug', 200);
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
        Schema::dropIfExists('posts');
    }
}
