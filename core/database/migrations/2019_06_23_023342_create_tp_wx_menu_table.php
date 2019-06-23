<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_menu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('level')->nullable()->default(1)->comment('菜单级别');
			$table->string('name', 50)->default('');
			$table->integer('sort')->nullable()->default(0)->comment('排序');
			$table->string('type', 20)->nullable()->default('')->comment('0 view 1 click');
			$table->string('value')->nullable();
			$table->string('token', 50)->default('');
			$table->integer('pid')->nullable()->default(0)->comment('上级菜单');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_menu');
	}

}
