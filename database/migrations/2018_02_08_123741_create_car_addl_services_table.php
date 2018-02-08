<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarAddlServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_addl_services', function(Blueprint $table)
		{
			$table->increments('car_addl_services_id');
			$table->integer('vehicle_id')->unsigned()->index('car_addl_services_vehicle_id_foreign');
			$table->integer('addl_services_id')->unsigned()->index('car_addl_services_addl_services_id_foreign');
			$table->string('addl_services_name', 191);
			$table->integer('fees');
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
		Schema::drop('car_addl_services');
	}

}
