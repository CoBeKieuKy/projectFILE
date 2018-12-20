<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhanxetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhanxet', function(Blueprint $table)
		{
			$table->integer('msnd')->nullable();
			$table->text('nhanxet')->nullable();
			$table->integer('msphim')->nullable();
			$table->date('ngaynx')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nhanxet');
	}

}
