<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRollTrackerTable extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roll_tracker', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('roll_id');
			$table->string('action', 32);
			$table->decimal('yard_change', 5, 2);
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
		Schema::drop('roll_tracker');
	}


}
