<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxMsgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_msg', function(Blueprint $table)
		{
			$table->integer('msgid', true);
			$table->integer('admin_id')->index('uid')->comment('系统用户ID');
			$table->string('titile', 100)->index('fake_id');
			$table->text('content', 65535);
			$table->integer('createtime')->default(0)->comment('创建时间');
			$table->integer('sendtime')->default(0)->index('createymd')->comment('发送时间');
			$table->boolean('issend')->nullable()->default(0)->comment('0未发送1成功2失败');
			$table->boolean('sendtype')->nullable()->default(1)->comment('0单人1所有');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_msg');
	}

}
