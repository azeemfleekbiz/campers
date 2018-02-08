<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tax_tbl', function(Blueprint $table)
		{
			$table->increments('tax_id');
			$table->integer('city_id')->unsigned()->index('tax_tbl_city_id_foreign');
			$table->string('city_name', 191);
			$table->string('tax_name', 191);
			$table->integer('fees');
			$table->integer('currency_id')->unsigned()->index('tax_tbl_currency_id_foreign');
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
		Schema::drop('tax_tbl');
	}

}
