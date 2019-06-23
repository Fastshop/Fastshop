<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_role', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->string('name', 20)->comment('后台组名');
			$table->smallInteger('pid')->unsigned()->default(0)->index('pid')->comment('父ID');
			$table->boolean('status')->nullable()->default(0)->index('status')->comment('是否激活 1：是 0：否');
			$table->smallInteger('sort')->unsigned()->default(0)->comment('排序权重');
			$table->string('remark')->nullable()->comment('备注说明');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_role');
	}

}
