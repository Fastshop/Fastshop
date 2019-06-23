<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpVrOrderCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_vr_order_code', function(Blueprint $table)
		{
			$table->integer('rec_id', true)->comment('兑换码表索引id');
			$table->integer('order_id')->index('order_id')->comment('虚拟订单id');
			$table->integer('user_id')->unsigned()->default(0)->comment('买家ID');
			$table->string('vr_code', 18)->default('')->comment('兑换码');
			$table->boolean('vr_state')->default(0)->comment('使用状态 0:(默认)未使用1:已使用2:已过期');
			$table->integer('vr_usetime')->default(0)->comment('使用时间');
			$table->decimal('pay_price', 10)->default(0.00)->comment('实际支付金额(结算)');
			$table->integer('vr_indate')->default(0)->comment('过期时间');
			$table->boolean('refund_lock')->default(0)->comment('退款锁定状态:0为正常,1为锁定,2为同意,默认为0');
			$table->boolean('vr_invalid_refund')->default(1)->comment('允许过期退款1是0否');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_vr_order_code');
	}

}
