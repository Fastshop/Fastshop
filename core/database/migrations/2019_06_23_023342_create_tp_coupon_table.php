<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpCouponTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_coupon', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->string('name', 50)->default('')->comment('优惠券名字');
			$table->boolean('type')->default(0)->comment('发放类型 0下单赠送1 指定发放 2 免费领取 3线下发放');
			$table->decimal('money', 10)->default(0.00)->comment('优惠券金额');
			$table->decimal('condition', 10)->default(0.00)->comment('使用条件');
			$table->integer('createnum')->nullable()->default(0)->comment('发放数量');
			$table->integer('send_num')->nullable()->default(0)->comment('已领取数量');
			$table->integer('use_num')->nullable()->default(0)->comment('已使用数量');
			$table->integer('send_start_time')->nullable()->comment('发放开始时间');
			$table->integer('send_end_time')->nullable()->comment('发放结束时间');
			$table->integer('use_start_time')->nullable()->comment('使用开始时间');
			$table->integer('use_end_time')->nullable()->index('use_end_time')->comment('使用结束时间');
			$table->integer('add_time')->nullable()->comment('添加时间');
			$table->integer('status')->nullable()->comment('状态：1有效,2无效');
			$table->boolean('use_type')->nullable()->default(0)->comment('使用范围：0全店通用1指定商品可用2指定分类商品可用');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_coupon');
	}

}
