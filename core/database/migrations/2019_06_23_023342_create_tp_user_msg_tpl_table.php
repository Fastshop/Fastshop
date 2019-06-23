<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserMsgTplTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_msg_tpl', function(Blueprint $table)
		{
			$table->string('mmt_code', 50)->primary()->comment('用户消息模板编号');
			$table->string('mmt_name', 50)->comment('模板名称');
			$table->boolean('mmt_message_switch')->comment('站内信接收开关');
			$table->string('mmt_message_content')->comment('站内信消息内容');
			$table->boolean('mmt_short_switch')->comment('短信接收开关');
			$table->string('mmt_short_content')->nullable()->comment('短信接收内容');
			$table->string('mmt_short_sign', 50)->nullable()->comment('短信签名');
			$table->string('mmt_short_code', 50)->nullable()->comment('短信模板ID');
			$table->boolean('mmt_mail_switch')->comment('邮件接收开关');
			$table->string('mmt_mail_subject')->nullable()->comment('邮件标题');
			$table->text('mmt_mail_content', 65535)->nullable()->comment('邮件内容');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_msg_tpl');
	}

}
