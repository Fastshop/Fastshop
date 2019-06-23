<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_reply', function(Blueprint $table)
		{
			$table->increments('id')->comment('微信关键词回复表');
			$table->string('rule', 32)->nullable()->comment('规则名');
			$table->integer('update_time')->unsigned()->nullable();
			$table->string('type', 10)->nullable()->comment('回复类型keyword,default,follow');
			$table->string('msg_type', 10)->nullable()->comment('回复消息类型text,news');
			$table->text('data', 65535)->nullable()->comment('text使用该自动存储文本');
			$table->integer('material_id')->unsigned()->nullable()->comment('news、image的素材id等');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_reply');
	}

}
