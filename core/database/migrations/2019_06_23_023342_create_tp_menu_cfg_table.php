<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMenuCfgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_menu_cfg', function(Blueprint $table)
		{
			$table->smallInteger('menu_id', true)->unsigned();
			$table->string('menu_name', 100)->default('')->comment('自定义名称');
			$table->string('default_name', 100)->default('')->comment('默认名称');
			$table->boolean('is_show')->default(0)->comment('是否显示');
			$table->boolean('is_tab')->default(0)->comment('是否切块');
			$table->string('menu_url')->default('')->comment('手机端url');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_menu_cfg');
	}

}
