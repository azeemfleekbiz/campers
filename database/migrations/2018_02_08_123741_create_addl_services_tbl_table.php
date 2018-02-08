<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddlServicesTblTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addl_services_tbl', function(Blueprint $table)
		{
			$table->increments('addl_services_id');
			$table->string('addl_services', 191);
			$table->integer('company_id')->unsigned()->index('addl_services_tbl_company_id_foreign');
			$table->integer('fees');
			$table->integer('multi_selected');
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
		Schema::drop('addl_services_tbl');
	}

}
