<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('likes', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->integer('post_id')->unsigned();
			$table->boolean('like');
			$table->increments('id');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('post_id')->references('id')->on('submissions');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('likes');
	}

}
