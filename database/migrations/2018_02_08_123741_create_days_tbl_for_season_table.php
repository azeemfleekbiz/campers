<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDaysTblForSeasonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('days_tbl_for_season', function(Blueprint $table)
		{
			$table->increments('days_tbl_id');
			$table->integer('season_id')->unsigned();
			$table->integer('from_day');
			$table->integer('to_day');
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
		Schema::drop('days_tbl_for_season');
	}

}
