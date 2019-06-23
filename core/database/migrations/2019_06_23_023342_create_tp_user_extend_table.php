<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserExtendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_extend', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable()->default(0);
			$table->string('invoice_title', 200)->nullable()->comment('发票抬头');
			$table->string('taxpayer', 100)->nullable()->comment('纳税人识别号');
			$table->string('invoice_desc', 50)->nullable()->comment('不开发票/明细');
			$table->string('realname', 100)->nullable()->comment('真实姓名');
			$table->string('idcard', 100)->nullable()->comment('身份证号');
			$table->string('cash_alipay', 100)->default('')->comment('提现支付宝号');
			$table->string('cash_unionpay', 100)->default('')->comment('提现银行卡号');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_extend');
	}

}
