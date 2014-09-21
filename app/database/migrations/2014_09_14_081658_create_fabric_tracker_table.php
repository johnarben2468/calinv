<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFabricTrackerTable extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fabric_tracker', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('fabric_id');
			$table->string('action', 32);
			$table->integer('doer');
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
		Schema::drop('fabric_tracker');
	}


}
