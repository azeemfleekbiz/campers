<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOneWayTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('one_way_tbl', function(Blueprint $table)
		{
			$table->increments('one_way_id');
			$table->integer('company_id')->unsigned()->index('one_way_tbl_company_id_foreign');
			$table->string('pickup_location', 191);
			$table->string('drop_location', 191);
			$table->integer('fees')->unsigned();
			$table->integer('currency_id')->unsigned()->index('one_way_tbl_currency_id_foreign');
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
		Schema::drop('one_way_tbl');
	}

}
