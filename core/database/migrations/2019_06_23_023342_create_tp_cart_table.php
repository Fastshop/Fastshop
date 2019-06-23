<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_cart', function(Blueprint $table)
		{
			$table->increments('id')->comment('购物车表');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户id');
			$table->char('session_id', 128)->default('')->index('session_id')->comment('session');
			$table->integer('goods_id')->unsigned()->default(0)->index('goods_id')->comment('商品id');
			$table->string('goods_sn', 60)->default('')->comment('商品货号');
			$table->string('goods_name', 120)->default('')->comment('商品名称');
			$table->decimal('market_price', 10)->unsigned()->default(0.00)->comment('市场价');
			$table->decimal('goods_price', 10)->default(0.00)->comment('本店价');
			$table->decimal('member_goods_price', 10)->nullable()->default(0.00)->comment('会员折扣价');
			$table->smallInteger('goods_num')->unsigned()->nullable()->default(0)->comment('购买数量');
			$table->integer('item_id')->nullable()->default(0)->comment('规格ID');
			$table->string('spec_key', 64)->nullable()->default('')->index('spec_key')->comment('商品规格key 对应tp_spec_goods_price 表');
			$table->string('spec_key_name', 64)->nullable()->default('')->comment('商品规格组合名称');
			$table->string('bar_code', 64)->nullable()->default('')->comment('商品条码');
			$table->boolean('selected')->nullable()->default(1)->comment('购物车选中状态');
			$table->integer('add_time')->nullable()->default(0)->comment('加入购物车的时间');
			$table->boolean('prom_type')->nullable()->default(0)->comment('0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠,7 搭配购');
			$table->integer('prom_id')->nullable()->default(0)->comment('活动id');
			$table->string('sku', 128)->nullable()->default('')->comment('sku');
			$table->integer('combination_group_id')->unsigned()->default(0)->comment(' 搭配购的组id/cart_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_cart');
	}

}
