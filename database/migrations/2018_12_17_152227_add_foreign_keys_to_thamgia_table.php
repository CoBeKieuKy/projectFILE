<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToThamgiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('thamgia', function(Blueprint $table)
		{
			$table->foreign('msphim', 'thamgia_msphim_fkey')->references('msphim')->on('phim')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('thamgia', function(Blueprint $table)
		{
			$table->dropForeign('thamgia_msphim_fkey');
		});
	}

}
