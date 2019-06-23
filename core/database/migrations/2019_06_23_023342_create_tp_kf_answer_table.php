<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_answer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('que_id')->unsigned()->comment('问题id');
			$table->string('content')->comment('内容');
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
		Schema::drop('tp_kf_answer');
	}

}
