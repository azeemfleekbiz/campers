<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('vehicle_id');
			$table->integer('company_id')->unsigned()->index('vehicles_company_id_foreign');
			$table->string('vehicle_title', 191);
			$table->string('suitable_for', 191);
			$table->string('vehicle_age', 191);
			$table->string('engine_size', 191);
			$table->string('car_image', 191);
			$table->string('currency', 191);
			$table->string('toll_fee', 191);
			$table->string('deployment_fee', 191);
			$table->string('category', 191);
			$table->string('comp_name', 191);
			$table->enum('is_active', array('0','1'))->default('1');
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
		Schema::drop('vehicles');
	}

}
