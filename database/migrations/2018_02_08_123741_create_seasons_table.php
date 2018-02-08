<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seasons', function(Blueprint $table)
		{
			$table->increments('seasons_id');
			$table->integer('company_id')->unsigned()->index('seasons_company_id_foreign');
			$table->string('comp_name', 191);
			$table->string('season_name', 191);
			$table->dateTime('month_to');
			$table->dateTime('month_from');
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
		Schema::drop('seasons');
	}

}
