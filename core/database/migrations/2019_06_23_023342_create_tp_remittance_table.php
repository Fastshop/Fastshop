<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpRemittanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_remittance', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('分销用户转账记录表');
			$table->integer('user_id')->nullable()->default(0)->comment('汇款的用户id');
			$table->string('bank_name', 32)->nullable()->default('')->comment('收款银行名称');
			$table->string('account_bank', 32)->nullable()->default('')->comment('银行账号');
			$table->string('account_name', 32)->nullable()->default('')->comment('开户人名称');
			$table->decimal('money', 10)->nullable()->default(0.00)->comment('汇款金额');
			$table->boolean('status')->nullable()->default(0)->comment('0汇款失败 1汇款成功');
			$table->integer('handle_time')->nullable()->default(0)->comment('处理时间');
			$table->integer('create_time')->nullable()->default(0)->comment('申请时间');
			$table->string('remark', 1024)->nullable()->default('')->comment('汇款备注');
			$table->integer('admin_id')->nullable()->default(0)->comment('处理管理员id');
			$table->integer('withdrawals_id')->nullable()->default(0)->comment('提现申请表id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_remittance');
	}

}
