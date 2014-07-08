<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company',function($table){
		$table->increments('company_id');
		$table->string('company_owner',50);
		$table->string('company_address',255)->nullable();
        $table->string('company_logo',50)->nullable();
		$table->string('company_contact',15);
		$table->string('company_website',50)->nullable();
		$table->string('company_fax',15)->nullable();
		$table->string('company_email',50);		
		$table->mediumText('company_description')->nullable();
		$table->string('company_name',50);
				
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company');
	}

}
