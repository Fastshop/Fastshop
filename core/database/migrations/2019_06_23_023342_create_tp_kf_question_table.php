<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_question', function(Blueprint $table)
		{
			$table->increments('id')->comment('id');
			$table->string('name')->comment('名称');
			$table->string('link')->nullable()->comment('连接');
			$table->integer('add_time')->unsigned()->comment('添加时间');
			$table->boolean('status')->default(1)->comment('是否启用 0 ：不启用  1：启用');
			$table->integer('pid')->unsigned()->default(0)->comment('父级id');
			$table->integer('storeid')->unsigned()->default(1)->comment('店铺id');
			$table->boolean('is_host')->comment('是否热门  0：否 1：是');
			$table->boolean('is_common')->comment('是否常见 0：否 1：是');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_question');
	}

}
