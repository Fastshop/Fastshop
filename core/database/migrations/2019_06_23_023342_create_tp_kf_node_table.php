<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfNodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_node', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('name', 20)->index('name')->comment('节点名称');
			$table->string('title', 50)->comment('菜单名称');
			$table->boolean('status')->default(0)->index('status')->comment('是否激活 1：是 2：否');
			$table->string('remark')->nullable()->comment('备注说明');
			$table->smallInteger('pid')->unsigned()->index('pid')->comment('父ID');
			$table->boolean('level')->index('level')->comment('节点等级');
			$table->string('data')->nullable()->comment('附加参数');
			$table->smallInteger('sort')->unsigned()->default(0)->comment('排序权重');
			$table->boolean('display')->default(0)->comment('菜单显示类型 0:不显示 1:导航菜单 2:左侧菜单');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_node');
	}

}
