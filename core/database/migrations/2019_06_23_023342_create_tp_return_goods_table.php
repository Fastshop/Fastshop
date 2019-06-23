<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpReturnGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_return_goods', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('退货申请表id自增');
			$table->integer('rec_id')->nullable()->default(0)->comment('order_goods表id');
			$table->integer('order_id')->nullable()->default(0)->comment('订单id');
			$table->string('order_sn', 1024)->nullable()->default('')->comment('订单编号');
			$table->integer('goods_id')->nullable()->default(0)->comment('商品id');
			$table->integer('goods_num')->nullable()->default(1)->comment('退货数量');
			$table->boolean('type')->nullable()->default(0)->comment('0仅退款 1退货退款 2换货');
			$table->string('reason')->nullable()->default('')->comment('退换货原因');
			$table->string('describe')->nullable()->default('')->comment('问题描述');
			$table->string('imgs', 512)->nullable()->default('')->comment('拍照图片路径');
			$table->integer('addtime')->nullable()->default(0)->comment('申请时间');
			$table->boolean('status')->nullable()->default(0)->comment('-2用户取消-1不同意0待审核1通过2已发货3已收货4换货完成5退款完成');
			$table->string('remark', 1024)->nullable()->default('')->comment('客服备注');
			$table->integer('user_id')->nullable()->default(0)->index('user_id')->comment('用户id');
			$table->string('spec_key', 64)->nullable()->default('')->comment('商品规格key 对应tp_spec_goods_price 表');
			$table->text('seller_delivery', 65535)->nullable()->comment('换货服务，卖家重新发货信息');
			$table->decimal('refund_money', 10)->nullable()->default(0.00)->comment('退还金额');
			$table->decimal('refund_deposit', 10)->nullable()->default(0.00)->comment('退还余额');
			$table->integer('refund_integral')->nullable()->default(0)->comment('退还积分');
			$table->boolean('refund_type')->nullable()->default(0)->comment('退款类型');
			$table->string('refund_mark')->nullable()->comment('退款备注');
			$table->integer('refund_time')->nullable()->default(0)->comment('退款时间');
			$table->boolean('is_receive')->nullable()->default(0)->comment('申请售后时是否收到货物');
			$table->text('delivery', 65535)->nullable()->comment('用户发货信息');
			$table->integer('checktime')->nullable()->comment('卖家审核时间');
			$table->integer('receivetime')->nullable()->comment('卖家收货时间');
			$table->integer('canceltime')->nullable()->comment('用户取消时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_return_goods');
	}

}
