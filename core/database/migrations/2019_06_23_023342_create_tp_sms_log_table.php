<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSmsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_sms_log', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->string('mobile', 11)->nullable()->default('')->comment('手机号');
			$table->string('session_id', 128)->nullable()->default('')->comment('session_id');
			$table->integer('add_time')->nullable()->default(0)->comment('发送时间');
			$table->string('code', 10)->nullable()->default('')->comment('验证码');
			$table->integer('status')->default(0)->comment('发送状态,1:成功,0:失败');
			$table->string('msg')->nullable()->comment('短信内容');
			$table->integer('scene')->nullable()->default(0)->comment('发送场景,1:用户注册,2:找回密码,3:客户下单,4:客户支付,5:商家发货,6:身份验证');
			$table->text('error_msg', 65535)->nullable()->comment('发送短信异常内容');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_sms_log');
	}

}
