<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_text', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->integer('uid')->index('uid')->comment('用户id');
			$table->string('uname', 90)->comment('用户名');
			$table->char('keyword')->comment('关键词');
			$table->boolean('precisions')->default(0)->comment('precisions');
			$table->text('text', 65535)->comment('text');
			$table->string('createtime', 13)->comment('创建时间');
			$table->string('updatetime', 13)->comment('更新时间');
			$table->integer('click')->comment('点击');
			$table->char('token', 30)->comment('token');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_text');
	}

}
