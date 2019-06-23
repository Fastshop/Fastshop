<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpRechargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_recharge', function(Blueprint $table)
		{
			$table->bigInteger('order_id', true);
			$table->bigInteger('user_id')->default(0)->comment('会员ID');
			$table->string('nickname', 50)->nullable()->comment('会员昵称');
			$table->string('order_sn', 30)->default('')->comment('充值单号');
			$table->decimal('account', 10)->nullable()->default(0.00)->comment('充值金额');
			$table->integer('ctime')->nullable()->comment('充值时间');
			$table->integer('pay_time')->nullable()->comment('支付时间');
			$table->string('pay_code', 20)->nullable();
			$table->string('pay_name', 80)->nullable()->comment('支付方式');
			$table->boolean('pay_status')->nullable()->default(0)->comment('充值状态0:待支付 1:充值成功 2:交易关闭');
			$table->boolean('buy_vip')->nullable()->default(0)->comment('是否为VIP充值，1是');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_recharge');
	}

}
