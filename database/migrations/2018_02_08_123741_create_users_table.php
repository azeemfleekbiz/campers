<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->integer('role_id')->unsigned()->index('users_role_id_foreign');
			$table->string('full_name', 191);
			$table->string('email', 191)->unique();
			$table->string('password', 191);
			$table->enum('is_active', array('0','1'))->default('1');
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
