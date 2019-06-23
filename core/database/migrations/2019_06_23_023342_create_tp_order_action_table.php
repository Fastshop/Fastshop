<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpOrderActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_order_action', function(Blueprint $table)
		{
			$table->increments('action_id')->comment('表id');
			$table->integer('order_id')->unsigned()->default(0)->index('order_id')->comment('订单ID');
			$table->integer('action_user')->nullable()->default(0)->comment('操作人 0 为用户操作，其他为管理员id');
			$table->boolean('order_status')->default(0)->comment('订单状态');
			$table->boolean('shipping_status')->default(0)->comment('配送状态');
			$table->boolean('pay_status')->default(0)->comment('支付状态');
			$table->string('action_note')->default('')->comment('操作备注');
			$table->integer('log_time')->unsigned()->default(0)->comment('操作时间');
			$table->string('status_desc')->nullable()->comment('状态描述');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_order_action');
	}

}
