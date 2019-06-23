<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAdminRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_admin_role', function(Blueprint $table)
		{
			$table->smallInteger('role_id', true)->unsigned()->comment('角色ID');
			$table->string('role_name', 30)->nullable()->comment('角色名称');
			$table->text('act_list', 65535)->nullable()->comment('权限列表');
			$table->string('role_desc')->nullable()->comment('角色描述');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_admin_role');
	}

}
