<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCarInclusionsTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('car_inclusions_tbl', function(Blueprint $table)
		{
			$table->foreign('inclusions_id')->references('inclusions_id')->on('inclusions_tbl')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('car_inclusions_tbl', function(Blueprint $table)
		{
			$table->dropForeign('car_inclusions_tbl_inclusions_id_foreign');
			$table->dropForeign('car_inclusions_tbl_vehicle_id_foreign');
		});
	}

}
