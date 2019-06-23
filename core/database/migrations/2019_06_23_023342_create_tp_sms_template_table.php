<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSmsTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_sms_template', function(Blueprint $table)
		{
			$table->integer('tpl_id', true)->comment('自增ID');
			$table->string('sms_sign', 50)->default('')->comment('短信签名');
			$table->string('sms_tpl_code', 100)->default('')->comment('短信模板ID');
			$table->string('tpl_content', 512)->default('')->comment('发送短信内容');
			$table->string('send_scene', 100)->default('')->comment('短信发送场景');
			$table->integer('add_time')->comment('添加时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_sms_template');
	}

}
