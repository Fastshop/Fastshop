<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxKeywordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_keyword', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('微信关键词表');
			$table->char('keyword');
			$table->integer('pid')->index('pid')->comment('对应表ID，如wx_reply的id');
			$table->string('type', 30)->comment('关键词操作类型 auto_reply');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_keyword');
	}

}
