<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfChatlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_chatlog', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('from_id', 55)->index('fromid')->comment('网页用户随机编号(仅为记录参考记录)');
			$table->string('kefu_id', 55)->index('toid')->comment('客服的id');
			$table->text('content', 65535)->comment('发送的内容');
			$table->integer('timeline')->comment('记录时间');
			$table->boolean('is_delete')->default(0)->comment('是否删除  0：未删除 1：已删除');
			$table->boolean('need_send')->nullable()->default(0)->comment('0 不需要推送 1 需要推送');
			$table->string('from_name', 155)->default('')->comment('消息来源用户名');
			$table->string('to_name', 155)->default('')->comment('接收消息用户名');
			$table->integer('storeid')->unsigned()->default(1)->comment('店铺id');
			$table->string('store_name', 50)->comment('客服所属店铺名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_chatlog');
	}

}
