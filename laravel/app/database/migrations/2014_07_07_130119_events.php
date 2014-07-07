<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table){
			$table->increments("event_id");
			$table->string("event_title",255);
			$table->integer("event_location")->foreign('event_location')->references('location_id')->on('location');
			$table->longText("event_description");
			$table->string("event_thumbnail",255)->nullable();
			$table->string("event_banner",255)->nullable();
			$table->integer("event_rating");
			$table->string("event_website",255);
			$table->string("event_fblink",255)->nullable();
			$table->string("event_twitter",255)->nullable();
			$table->integer("event_category")->foreign('event_category')->references('category_id')->on('event_category');
			$table->integer("event_user_created")->foreign('event_user_created')->references('user_id')->on('users');
			$table->string("event_venue",255);
			$table->string("event_contact_no",20);
			$table->string("event_fee",20);
			$table->integer("event_ticket")->foreign('event_ticket')->references('ticket_id')->on('event_ticket_price');
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
		Schema::drop('events');
	}

}
