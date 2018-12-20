<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDanhsachTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('danhsach', function(Blueprint $table)
		{
			$table->integer('msnd')->nullable();
			$table->integer('msphim')->nullable();
			$table->integer('diem')->nullable();
			$table->boolean('trangthai')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('danhsach');
	}

}
