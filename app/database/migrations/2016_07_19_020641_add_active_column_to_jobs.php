<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActiveColumnToJobs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			//
			$table->tinyInteger('active')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			//
			$table->dropColumn('active');
		});
	}

}
