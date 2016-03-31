<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('comment');
            $table->integer('no_of_votes');
            $table->integer('uid')->unsigned();
            $table->integer('pid')->unsigned();
            $table->timestamps();


            $table->foreign('uid')->references('id')->on('users');
            $table->foreign('pid')->references('id')->on('submissions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }

}
