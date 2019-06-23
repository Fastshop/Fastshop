<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTemplateClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_template_class', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->boolean('type')->nullable()->comment('类型  1行业  2风格');
			$table->string('name', 64)->nullable()->comment('行业或风格名称');
			$table->integer('sort_order')->unsigned()->nullable()->default(0)->comment('排序');
			$table->integer('add_time')->unsigned()->nullable()->default(0)->comment('添加时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_template_class');
	}

}
