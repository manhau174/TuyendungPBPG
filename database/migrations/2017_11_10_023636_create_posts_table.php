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
            $table->integer('job_id');
            $table->integer('city_id');
            $table->integer('form_work_id');
            $table->integer('quantity');
            $table->string('title', 100);
            $table->string('slug', 200);
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->text('description');
            $table->string('benefit')->nullable();
            $table->string('guide')->nullable();
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
