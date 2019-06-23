<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_config', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned()->comment('表id');
			$table->string('name', 50)->nullable()->comment('配置的key键名');
			$table->string('value', 512)->nullable()->comment('配置的val值');
			$table->string('inc_type', 64)->nullable()->comment('配置分组');
			$table->string('desc', 50)->nullable()->comment('描述');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_config');
	}

}
