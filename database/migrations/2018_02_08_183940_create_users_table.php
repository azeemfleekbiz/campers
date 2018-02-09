<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->integer('role_id')->unsigned();
            $table->string('full_name');  
            $table->string('email')->unique();
            $table->string('password');  
            $table->enum('is_active',['0', '1'])->default('1');  
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('role_id')->on('user_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
