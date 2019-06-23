<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpOrderGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_order_goods', function(Blueprint $table)
		{
			$table->increments('rec_id')->comment('表id自增');
			$table->integer('order_id')->unsigned()->default(0)->index('order_id')->comment('订单id');
			$table->integer('goods_id')->unsigned()->default(0)->index('goods_id')->comment('商品id');
			$table->string('goods_name', 120)->default('')->comment('商品名称');
			$table->string('goods_sn', 60)->default('')->comment('商品货号');
			$table->smallInteger('goods_num')->unsigned()->default(1)->comment('购买数量');
			$table->decimal('final_price', 10)->default(0.00)->comment('商品实际购买价');
			$table->decimal('goods_price', 10)->default(0.00)->comment('本店价');
			$table->decimal('cost_price', 10)->nullable()->default(0.00)->comment('商品成本价');
			$table->decimal('member_goods_price', 10)->nullable()->default(0.00)->comment('会员折扣价');
			$table->integer('give_integral')->unsigned()->nullable()->default(0)->comment('购买商品赠送积分');
			$table->integer('item_id')->unsigned()->default(0)->comment('商品规格id');
			$table->string('spec_key', 128)->nullable()->default('')->comment('商品规格key');
			$table->string('spec_key_name', 128)->nullable()->default('')->comment('规格对应的中文名字');
			$table->string('bar_code', 64)->default('')->comment('条码');
			$table->boolean('is_comment')->nullable()->default(0)->comment('是否评价');
			$table->boolean('prom_type')->default(0)->comment('0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠,4预售');
			$table->integer('prom_id')->unsigned()->nullable()->default(0)->comment('活动id');
			$table->boolean('is_send')->nullable()->default(0)->comment('0未发货，1已发货，2已换货，3已退货');
			$table->integer('delivery_id')->nullable()->default(0)->comment('发货单ID');
			$table->string('sku', 128)->nullable()->default('')->comment('sku');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_order_goods');
	}

}
