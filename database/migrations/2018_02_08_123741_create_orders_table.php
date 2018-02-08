<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('order_id');
			$table->string('salutation', 191);
			$table->string('f_name', 191);
			$table->string('l_name', 191);
			$table->string('dob', 191);
			$table->string('address1', 191);
			$table->string('address2', 191);
			$table->string('postal_code', 191);
			$table->string('city', 191);
			$table->string('tel', 191);
			$table->string('email', 191);
			$table->string('vehicle_img', 191);
			$table->string('vehicle_title', 191);
			$table->string('pick_loc', 191);
			$table->string('drop_loc', 191);
			$table->string('pick_date', 191);
			$table->string('drop_date', 191);
			$table->string('vehicle_company', 191);
			$table->string('rent_price', 191);
			$table->string('discount', 191);
			$table->string('rent_price_payble', 191);
			$table->string('one_way', 191);
			$table->string('toll_fee', 191);
			$table->string('deployment_fee', 191);
			$table->string('total_extras', 191);
			$table->string('equipment_tittle', 191);
			$table->string('equipment_fees', 191);
			$table->string('addl_services_title', 191);
			$table->string('addl_services_fees', 191);
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
		Schema::drop('orders');
	}

}
