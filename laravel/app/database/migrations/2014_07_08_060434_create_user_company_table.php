<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_company',function($table)
		{
			$table->bigInteger('user_id')->foreign('user_id')->references('user_id')->on('users');
			$table->bigInteger('company_id')->foreign('company_id')->references('company_id')->on('company'); 
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_company');
	}

}
