<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDanhsachTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('danhsach', function(Blueprint $table)
		{
			$table->foreign('msnd', 'danhsach_msnd_fkey')->references('msnd')->on('nguoidung')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('msphim', 'danhsach_msphim_fkey')->references('msphim')->on('phim')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('danhsach', function(Blueprint $table)
		{
			$table->dropForeign('danhsach_msnd_fkey');
			$table->dropForeign('danhsach_msphim_fkey');
		});
	}

}
