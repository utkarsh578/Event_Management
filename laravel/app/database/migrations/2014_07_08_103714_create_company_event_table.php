<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_event',function($table)
		{
			$table->bigInteger('company_id')->foreign('company_id')->references('company_id')->on('company');
			$table->bigInteger('event_id')->foreign('event_id')->references('event_id')->on('events'); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_event');
	}

}
