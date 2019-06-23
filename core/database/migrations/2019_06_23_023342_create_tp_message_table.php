<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_message', function(Blueprint $table)
		{
			$table->integer('message_id', true);
			$table->smallInteger('admin_id')->unsigned()->default(0)->comment('管理者id');
			$table->text('message', 65535)->comment('站内信内容');
			$table->boolean('type')->default(0)->comment('个体消息：0，全体消息1');
			$table->boolean('category')->default(0)->comment(' 系统消息：0，活动消息：1');
			$table->integer('send_time')->unsigned()->comment('发送时间');
			$table->text('data', 65535)->nullable()->comment('消息序列化内容');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_message');
	}

}
