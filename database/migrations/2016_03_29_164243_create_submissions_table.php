<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('post');
			$table->string('category');
			$table->dateTime('date');
			$table->integer('no_of_votes');
			$table->integer('uid')->unsigned();
			$table->timestamps();

			$table->foreign('uid')->references('id')->on('users');

		});






	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submissions');
	}

}
