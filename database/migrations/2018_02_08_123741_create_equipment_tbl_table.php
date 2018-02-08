<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment_tbl', function(Blueprint $table)
		{
			$table->increments('equipment_id');
			$table->integer('company_id')->unsigned()->index('equipment_tbl_company_id_foreign');
			$table->string('equipment_name', 191);
			$table->integer('fees');
			$table->integer('multi_selected');
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
		Schema::drop('equipment_tbl');
	}

}
