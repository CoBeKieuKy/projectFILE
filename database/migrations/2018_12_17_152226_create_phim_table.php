<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhimTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phim', function(Blueprint $table)
		{
			$table->integer('msphim', true);
			$table->string('tenphim')->nullable();
			$table->text('poster')->nullable();
			$table->float('diem', 10, 0)->nullable();
			$table->text('noidung')->nullable();
			$table->string('tag')->nullable();
			$table->integer('xephang')->nullable();
			$table->string('dodai')->nullable();
			$table->string('tap')->nullable();
			$table->date('ngaycongchieu')->nullable();
			$table->string('nsx')->nullable();
			$table->string('luuy')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phim');
	}

}
