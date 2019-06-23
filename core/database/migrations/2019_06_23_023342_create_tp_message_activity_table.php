<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMessageActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_message_activity', function(Blueprint $table)
		{
			$table->integer('message_id', true);
			$table->string('message_title')->comment('消息标题');
			$table->text('message_content', 65535)->nullable()->comment('消息内容');
			$table->string('img_uri')->nullable()->comment('图片地址');
			$table->integer('send_time')->unsigned()->comment('发送时间');
			$table->integer('end_time')->unsigned()->default(0)->comment('活动结束时间');
			$table->string('mmt_code', 50)->comment('用户消息模板编号');
			$table->boolean('prom_type')->default(0)->comment('1抢购2团购3优惠促销4预售5虚拟6拼团7搭配购8自定义图文消息9订单促销');
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
		Schema::drop('tp_message_activity');
	}

}
