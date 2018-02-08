<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarEquipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('car_equipment', function(Blueprint $table)
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
		Schema::table('car_equipment', function(Blueprint $table)
		{
			$table->dropForeign('car_equipment_vehicle_id_foreign');
		});
	}

}
