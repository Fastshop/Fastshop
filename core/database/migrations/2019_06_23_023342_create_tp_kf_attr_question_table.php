<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfAttrQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_attr_question', function(Blueprint $table)
		{
			$table->increments('id')->comment('主键id');
			$table->string('name')->comment('问题分类名称');
			$table->integer('pid')->unsigned()->comment('父分类id');
			$table->integer('storeid')->unsigned()->default(1)->comment('所属店铺id');
			$table->integer('add_time')->unsigned()->comment('添加时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_attr_question');
	}

}
