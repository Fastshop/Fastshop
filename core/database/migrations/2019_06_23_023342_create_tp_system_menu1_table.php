<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSystemMenu1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_system_menu1', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('name', 50)->nullable()->comment('权限名字');
			$table->string('group', 20)->nullable()->comment('所属分组');
			$table->text('right', 65535)->nullable()->comment('权限码(控制器+动作)');
			$table->boolean('is_del')->nullable()->default(0)->comment('删除状态 1删除,0正常');
			$table->boolean('type')->nullable()->default(0)->comment('所属模块类型 0admin 1home 2mobile 3api');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_system_menu1');
	}

}
