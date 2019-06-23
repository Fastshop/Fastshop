<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWithdrawalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_withdrawals', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('提现申请表');
			$table->integer('user_id')->nullable()->default(0)->comment('用户id');
			$table->decimal('money', 10)->nullable()->default(0.00)->comment('提现金额');
			$table->integer('create_time')->nullable()->default(0)->comment('申请时间');
			$table->integer('check_time')->nullable()->default(0)->comment('审核时间');
			$table->integer('pay_time')->nullable()->default(0)->comment('支付时间');
			$table->integer('refuse_time')->nullable()->default(0)->comment('拒绝时间');
			$table->string('bank_name')->nullable()->default('')->comment('银行名称 如支付宝 微信 中国银行 农业银行等');
			$table->string('bank_card')->nullable()->default('')->comment('银行账号或支付宝账号');
			$table->string('realname', 100)->nullable()->default('')->comment('提款账号真实姓名');
			$table->string('remark')->nullable()->default('')->comment('提现备注');
			$table->decimal('taxfee', 10)->nullable()->default(0.00)->comment('税收手续费');
			$table->boolean('status')->nullable()->default(0)->comment('状态：-2删除作废-1审核失败0申请中1审核通过2付款成功3付款失败');
			$table->string('pay_code', 100)->nullable()->comment('付款对账流水号');
			$table->string('error_code')->nullable()->comment('付款失败错误代码');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_withdrawals');
	}

}
