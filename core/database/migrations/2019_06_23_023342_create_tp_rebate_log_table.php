<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpRebateLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_rebate_log', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('分成记录表');
			$table->integer('user_id')->nullable()->default(0)->comment('获佣用户');
			$table->integer('buy_user_id')->nullable()->default(0)->comment('购买人id');
			$table->string('nickname', 32)->nullable()->default('')->comment('购买人名称');
			$table->string('order_sn', 32)->nullable()->default('')->comment('订单编号');
			$table->integer('order_id')->nullable()->default(0)->index('order_id')->comment('订单id');
			$table->decimal('goods_price', 10)->nullable()->default(0.00)->comment('订单商品总额');
			$table->decimal('money', 10)->nullable()->default(0.00)->comment('获佣金额');
			$table->boolean('level')->nullable()->default(1)->comment('获佣用户级别');
			$table->integer('create_time')->nullable()->default(0)->comment('分成记录生成时间');
			$table->integer('confirm')->nullable()->default(0)->comment('确定收货时间');
			$table->boolean('status')->nullable()->default(0)->comment('0未付款,1已付款, 2等待分成(已收货) 3已分成, 4已取消');
			$table->integer('confirm_time')->nullable()->default(0)->comment('确定分成或者取消时间');
			$table->string('remark', 1024)->nullable()->default('')->comment('如果是取消, 有取消备注');
			$table->string('detail', 1024)->nullable()->comment('记录该笔佣金中来自每个商品的分佣详情');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_rebate_log');
	}

}
