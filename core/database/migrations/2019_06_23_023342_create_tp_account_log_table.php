<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAccountLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_account_log', function(Blueprint $table)
		{
			$table->increments('log_id')->comment('日志id');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户id');
			$table->decimal('user_money', 10)->nullable()->default(0.00)->comment('用户金额');
			$table->decimal('frozen_money', 10)->nullable()->default(0.00)->comment('冻结金额');
			$table->integer('pay_points')->default(0)->comment('支付积分');
			$table->integer('change_time')->unsigned()->comment('变动时间');
			$table->string('desc')->default('')->comment('描述');
			$table->string('order_sn', 50)->nullable()->comment('订单编号');
			$table->integer('order_id')->nullable()->comment('订单id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_account_log');
	}

}
