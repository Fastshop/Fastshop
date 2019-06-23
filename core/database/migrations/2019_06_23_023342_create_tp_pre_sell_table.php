<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPreSellTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_pre_sell', function(Blueprint $table)
		{
			$table->increments('pre_sell_id')->comment('预售id');
			$table->integer('goods_id')->unsigned()->default(0)->comment('商品id');
			$table->string('goods_name')->default('')->comment('商品名称');
			$table->bigInteger('item_id')->unsigned()->default(0)->comment('规格id');
			$table->string('item_name')->default('')->comment('规格名称');
			$table->string('title')->default('')->comment('预售标题');
			$table->string('desc')->default('')->comment('预售描述');
			$table->integer('deposit_goods_num')->unsigned()->default(0)->comment('订购商品数');
			$table->integer('deposit_order_num')->unsigned()->default(0)->comment('订购订单数');
			$table->smallInteger('stock_num')->unsigned()->default(0)->comment('预售库存');
			$table->integer('sell_start_time')->unsigned()->default(0)->comment('活动开始时间');
			$table->integer('sell_end_time')->unsigned()->default(0)->comment('活动结束时间');
			$table->integer('pay_start_time')->unsigned()->default(0)->comment('尾款支付开始时间');
			$table->integer('pay_end_time')->unsigned()->default(0)->comment('尾款支付结束时间');
			$table->decimal('deposit_price', 10)->unsigned()->default(0.00)->comment('订金');
			$table->string('price_ladder')->default('')->comment('价格阶梯。预定人数达到多少个时，价格为多少钱');
			$table->string('delivery_time_desc')->default('')->comment('开始发货时间描述');
			$table->boolean('is_finished')->default(0)->comment('是否已结束:0,正常；1，结束（待处理）；2,成功结束；3，失败结束。');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_pre_sell');
	}

}
