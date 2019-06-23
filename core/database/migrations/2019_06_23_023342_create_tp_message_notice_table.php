<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMessageNoticeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_message_notice', function(Blueprint $table)
		{
			$table->integer('message_id', true);
			$table->boolean('message_type')->default(0)->comment('个体消息：0，全体消息:1');
			$table->string('message_title')->nullable()->comment('消息标题');
			$table->text('message_content', 65535)->comment('消息内容');
			$table->integer('send_time')->unsigned()->comment('发送时间');
			$table->string('mmt_code', 50)->nullable()->comment('用户消息模板编号');
			$table->boolean('type')->nullable()->default(0)->comment('0系统公告1降价通知2优惠券到账提醒3优惠券使用提醒4优惠券即将过期提醒5预售订单尾款支付提醒6提现到账提醒');
			$table->integer('prom_id')->default(0)->comment('活动id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_message_notice');
	}

}
