<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarInclusionsTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('car_inclusions_tbl', function(Blueprint $table)
		{
			$table->increments('car_inclusion_id');
			$table->integer('vehicle_id')->unsigned()->index('car_inclusions_tbl_vehicle_id_foreign');
			$table->integer('inclusions_id')->unsigned()->index('car_inclusions_tbl_inclusions_id_foreign');
			$table->string('inclusion_name', 191);
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
		Schema::drop('car_inclusions_tbl');
	}

}
