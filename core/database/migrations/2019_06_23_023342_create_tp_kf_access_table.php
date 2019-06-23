<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfAccessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_access', function(Blueprint $table)
		{
			$table->smallInteger('role_id')->unsigned()->index('groupId');
			$table->smallInteger('node_id')->unsigned()->index('nodeId');
			$table->smallInteger('pid')->unsigned();
			$table->boolean('level');
			$table->string('module', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_access');
	}

}
