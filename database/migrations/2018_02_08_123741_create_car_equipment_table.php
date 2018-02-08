<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarEquipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_equipment', function(Blueprint $table)
		{
			$table->increments('car_equipment_id');
			$table->integer('vehicle_id')->unsigned()->index('car_equipment_vehicle_id_foreign');
			$table->integer('equipment_id')->unsigned();
			$table->string('equipment_name', 191);
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
		Schema::drop('car_equipment');
	}

}
