<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiclesPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicles_prices', function(Blueprint $table)
		{
			$table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicles_prices', function(Blueprint $table)
		{
			$table->dropForeign('vehicles_prices_vehicle_id_foreign');
		});
	}

}
