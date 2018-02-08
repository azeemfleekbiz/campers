<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarAddlServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('car_addl_services', function(Blueprint $table)
		{
			$table->foreign('addl_services_id')->references('addl_services_id')->on('addl_services_tbl')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('car_addl_services', function(Blueprint $table)
		{
			$table->dropForeign('car_addl_services_addl_services_id_foreign');
			$table->dropForeign('car_addl_services_vehicle_id_foreign');
		});
	}

}
