<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpExpenseLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_expense_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('admin_id')->nullable()->comment('操作管理员');
			$table->decimal('money', 10)->nullable()->comment('支出金额');
			$table->integer('integral')->nullable()->default(0)->comment('赠送积分');
			$table->boolean('type')->nullable()->default(0)->comment('支出类型0用户提现,1订单退款,2其他,3注册,4邀请,5分享,6评论');
			$table->integer('addtime')->nullable()->comment('日志记录时间');
			$table->integer('log_type_id')->nullable()->default(0)->comment('业务关联ID');
			$table->integer('user_id')->nullable()->default(0)->comment('涉及会员id');
			$table->integer('user_name')->nullable()->default(0)->comment('涉及用户');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_expense_log');
	}

}
