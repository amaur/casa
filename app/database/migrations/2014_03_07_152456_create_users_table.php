<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moradores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 200);
			$table->string('sobrenome', 200);
			$table->string('email', 200)->unique();
			$table->string('password', 60);
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
		Schema::drop('moradores');
	}

}