<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompAndCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comp_and_city', function(Blueprint $table)
		{
			$table->foreign('city_id')->references('city_id')->on('cities')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('company_id')->references('company_id')->on('companies')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comp_and_city', function(Blueprint $table)
		{
			$table->dropForeign('comp_and_city_city_id_foreign');
			$table->dropForeign('comp_and_city_company_id_foreign');
		});
	}

}
