<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNhanxetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nhanxet', function(Blueprint $table)
		{
			$table->foreign('msnd', 'nhanxet_msnd_fkey')->references('msnd')->on('nguoidung')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('msphim', 'nhanxet_msphim_fkey')->references('msphim')->on('phim')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nhanxet', function(Blueprint $table)
		{
			$table->dropForeign('nhanxet_msnd_fkey');
			$table->dropForeign('nhanxet_msphim_fkey');
		});
	}

}
