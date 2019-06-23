<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMessagePrivateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_message_private', function(Blueprint $table)
		{
			$table->integer('message_id', true);
			$table->text('message_content', 65535)->comment('消息内容');
			$table->integer('send_time')->unsigned()->comment('发送时间');
			$table->integer('send_user_id')->unsigned()->comment('发送者');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_message_private');
	}

}
