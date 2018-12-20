<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNguoidungTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nguoidung', function(Blueprint $table)
		{
			$table->integer('msnd', true);
			$table->string('ten')->nullable();
			$table->string('matkhau')->nullable();
			$table->boolean('vaitro')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nguoidung');
	}

}
