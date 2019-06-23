<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_role_user', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->smallInteger('role_id')->unsigned()->index('group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_role_user');
	}

}
