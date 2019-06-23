<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpNavigationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_navigation', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('前台导航表');
			$table->string('name', 32)->nullable()->default('')->comment('导航名称');
			$table->boolean('is_show')->nullable()->default(1)->comment('是否显示');
			$table->boolean('is_new')->nullable()->default(1)->comment('是否新窗口');
			$table->smallInteger('sort')->nullable()->default(50)->comment('排序');
			$table->string('url')->nullable()->default('')->comment('链接地址');
			$table->enum('position', array('top','bottom'))->default('top')->comment('菜单位置，top顶部，bottom底部');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_navigation');
	}

}
