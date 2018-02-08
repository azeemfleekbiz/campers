<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompAndCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comp_and_city', function(Blueprint $table)
		{
			$table->increments('comp_and_city_id');
			$table->integer('company_id')->unsigned()->index('comp_and_city_company_id_foreign');
			$table->integer('city_id')->unsigned()->index('comp_and_city_city_id_foreign');
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
		Schema::drop('comp_and_city');
	}

}
