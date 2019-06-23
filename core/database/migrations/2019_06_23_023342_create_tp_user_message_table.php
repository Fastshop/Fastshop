<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_message', function(Blueprint $table)
		{
			$table->integer('rec_id', true);
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户id');
			$table->integer('message_id')->unsigned()->default(0)->index('message_id')->comment('消息id');
			$table->boolean('category')->default(0)->comment('通知消息：0, 活动消息：1, 物流:2, 私信:3');
			$table->boolean('is_see')->default(0)->comment('是否查看：0未查看, 1已查看');
			$table->boolean('deleted')->default(0)->comment('用户假删除标识,1:删除,0未删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_message');
	}

}
