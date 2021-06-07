<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigInteger('id')->primary();
            $table->string('company');
            $table->string('model');
            $table->integer('year');
            $table->string('fuel');
            $table->string('transfer');
            $table->integer('cilandr');
            $table->string('VIN');
            $table->string('color');
            $table->bigInteger('price');
            $table->json('psckages');
            $table->string('img');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
