<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEventAttendingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_event_attending',function($table)
		{
			$table->bigInteger('user_id')->foreign('user_id')->references('user_id')->on('users');
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
		Schema::drop('User_Event_Attending');
	}

}
