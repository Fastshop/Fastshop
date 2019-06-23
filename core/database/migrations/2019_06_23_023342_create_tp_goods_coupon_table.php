<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsCouponTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_coupon', function(Blueprint $table)
		{
			$table->integer('coupon_id')->comment('优惠券id');
			$table->integer('goods_id')->default(0)->comment('指定的商品id：为零表示不指定商品');
			$table->smallInteger('goods_category_id')->default(0)->comment('指定的商品分类：为零表示不指定分类');
			$table->primary(['coupon_id','goods_id','goods_category_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_coupon');
	}

}
