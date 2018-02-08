<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInclusionsTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inclusions_tbl', function(Blueprint $table)
		{
			$table->increments('inclusions_id');
			$table->integer('company_id')->unsigned()->index('inclusions_tbl_company_id_foreign');
			$table->string('inclusion_name', 191);
			$table->string('description', 191);
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
		Schema::drop('inclusions_tbl');
	}

}
