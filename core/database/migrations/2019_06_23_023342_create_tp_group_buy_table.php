<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGroupBuyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_group_buy', function(Blueprint $table)
		{
			$table->increments('id')->comment('团购ID');
			$table->string('title')->default('')->comment('活动名称');
			$table->integer('start_time')->unsigned()->default(0)->comment('开始时间');
			$table->integer('end_time')->unsigned()->default(0)->comment('结束时间');
			$table->integer('goods_id')->unsigned()->default(0)->comment('商品ID');
			$table->bigInteger('item_id')->nullable()->default(0)->comment('对应spec_goods_price商品规格id');
			$table->decimal('price', 10)->comment('团购价格');
			$table->integer('goods_num')->nullable()->default(0)->comment('商品参团数');
			$table->integer('buy_num')->unsigned()->default(0)->comment('商品已购买数');
			$table->integer('order_num')->unsigned()->default(0)->comment('已下单人数');
			$table->integer('virtual_num')->unsigned()->default(0)->comment('虚拟购买数');
			$table->decimal('rebate', 10, 1)->comment('折扣');
			$table->text('intro', 65535)->nullable()->comment('本团介绍');
			$table->decimal('goods_price', 10)->comment('商品原价');
			$table->string('goods_name', 200)->default('')->comment('商品名称');
			$table->boolean('recommended')->default(0)->comment('是否推荐 0.未推荐 1.已推荐');
			$table->integer('views')->unsigned()->default(0)->comment('查看次数');
			$table->boolean('is_end')->nullable()->default(0)->comment('是否结束');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_group_buy');
	}

}
