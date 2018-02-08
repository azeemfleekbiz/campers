<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles_prices', function(Blueprint $table)
		{
			$table->increments('vehicle_price_id');
			$table->integer('vehicle_id')->unsigned()->index('vehicles_prices_vehicle_id_foreign');
			$table->string('season', 191);
			$table->integer('season_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->integer('company_id')->unsigned();
			$table->integer('days_tbl_id')->unsigned();
			$table->integer('car_price');
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
		Schema::drop('vehicles_prices');
	}

}
