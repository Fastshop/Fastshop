<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpCouponListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_coupon_list', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->integer('cid')->default(0)->index('cid')->comment('优惠券 对应coupon表id');
			$table->boolean('type')->default(0)->comment('发放类型 1 按订单发放 2 注册 3 邀请 4 按用户发放');
			$table->integer('uid')->default(0)->index('uid')->comment('用户id');
			$table->integer('order_id')->default(0)->index('order_id')->comment('订单id');
			$table->integer('get_order_id')->nullable()->default(0)->comment('优惠券来自订单ID');
			$table->integer('use_time')->default(0)->comment('使用时间');
			$table->string('code', 10)->nullable()->default('')->index('code')->comment('优惠券兑换码');
			$table->integer('send_time')->default(0)->comment('发放时间');
			$table->boolean('status')->nullable()->default(0)->comment('0未使用1已使用2已过期');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_coupon_list');
	}

}
