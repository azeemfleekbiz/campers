<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInclusionsTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inclusions_tbl', function(Blueprint $table)
		{
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
		Schema::table('inclusions_tbl', function(Blueprint $table)
		{
			$table->dropForeign('inclusions_tbl_company_id_foreign');
		});
	}

}
