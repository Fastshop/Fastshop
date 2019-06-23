<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_payment', function(Blueprint $table)
		{
			$table->boolean('pay_id')->primary()->comment('表id');
			$table->string('pay_code', 20)->default('')->unique('pay_code')->comment('支付code');
			$table->string('pay_name', 120)->default('')->comment('支付方式名称');
			$table->string('pay_fee', 10)->default('')->comment('手续费');
			$table->text('pay_desc', 65535)->comment('描述');
			$table->boolean('pay_order')->default(0)->comment('pay_coder');
			$table->text('pay_config', 65535)->comment('配置');
			$table->boolean('enabled')->default(0)->comment('开启');
			$table->boolean('is_cod')->default(0)->comment('是否货到付款');
			$table->boolean('is_online')->default(0)->comment('是否在线支付');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_payment');
	}

}
