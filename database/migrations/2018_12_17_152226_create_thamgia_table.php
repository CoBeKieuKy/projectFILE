<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThamgiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thamgia', function(Blueprint $table)
		{
			$table->integer('msphim')->nullable();
			$table->string('tennhanvat')->nullable();
			$table->string('tenphim')->nullable();
			$table->integer('msnv')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thamgia');
	}

}
