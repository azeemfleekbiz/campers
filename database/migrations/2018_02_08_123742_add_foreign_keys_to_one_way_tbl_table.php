<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOneWayTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('one_way_tbl', function(Blueprint $table)
		{
			$table->foreign('company_id')->references('company_id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
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
		Schema::table('one_way_tbl', function(Blueprint $table)
		{
			$table->dropForeign('one_way_tbl_company_id_foreign');
			$table->dropForeign('one_way_tbl_currency_id_foreign');
		});
	}

}
