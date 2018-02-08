<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTaxTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tax_tbl', function(Blueprint $table)
		{
			$table->foreign('city_id')->references('city_id')->on('cities')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('currency_id')->references('currency_id')->on('currency')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tax_tbl', function(Blueprint $table)
		{
			$table->dropForeign('tax_tbl_city_id_foreign');
			$table->dropForeign('tax_tbl_currency_id_foreign');
		});
	}

}
