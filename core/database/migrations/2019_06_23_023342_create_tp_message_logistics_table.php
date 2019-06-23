<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMessageLogisticsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_message_logistics', function(Blueprint $table)
		{
			$table->integer('message_id', true);
			$table->string('message_title')->nullable()->comment('消息标题');
			$table->text('message_content', 65535)->comment('消息内容');
			$table->string('img_uri')->nullable()->comment('图片地址');
			$table->integer('send_time')->unsigned()->comment('发送时间');
			$table->string('order_sn', 20)->default('')->comment('单号');
			$table->integer('order_id')->default(0)->comment('物流订单id');
			$table->string('mmt_code', 50)->nullable()->comment('用户消息模板编号');
			$table->boolean('type')->nullable()->default(0)->comment('1到货通知2发货提醒3签收提醒4评价提醒5退货提醒6退款提醒7虚拟商品');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_message_logistics');
	}

}
