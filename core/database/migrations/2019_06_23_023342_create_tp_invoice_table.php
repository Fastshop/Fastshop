<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpInvoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_invoice', function(Blueprint $table)
		{
			$table->increments('invoice_id');
			$table->bigInteger('order_id')->nullable()->comment('订单id');
			$table->integer('user_id')->nullable()->comment('用户id');
			$table->boolean('invoice_type')->nullable()->default(0)->comment('0普通发票1电子发票2增值税发票');
			$table->decimal('invoice_money', 10)->nullable()->default(0.00)->comment('发票金额');
			$table->string('invoice_title')->nullable()->comment('发票抬头');
			$table->string('invoice_desc')->nullable()->comment('发票内容');
			$table->decimal('invoice_rate', 10, 4)->nullable()->comment('发票税率');
			$table->string('taxpayer', 50)->nullable()->comment('纳税人识别号');
			$table->boolean('status')->nullable()->default(0)->comment('发票状态0待开1已开2作废');
			$table->integer('atime')->nullable()->default(0)->comment('开票时间');
			$table->integer('ctime')->nullable()->default(0)->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_invoice');
	}

}
