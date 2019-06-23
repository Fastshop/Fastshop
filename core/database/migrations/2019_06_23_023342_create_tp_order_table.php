<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_order', function(Blueprint $table)
		{
			$table->increments('order_id')->comment('订单id');
			$table->string('order_sn', 20)->default('')->unique('order_sn')->comment('订单编号');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户id');
			$table->boolean('order_status')->default(0)->comment('订单状态');
			$table->boolean('shipping_status')->default(0)->comment('发货状态');
			$table->boolean('pay_status')->default(0)->comment('支付状态');
			$table->string('consignee', 60)->default('')->comment('收货人');
			$table->integer('country')->unsigned()->default(0)->comment('国家');
			$table->integer('province')->unsigned()->default(0)->comment('省份');
			$table->integer('city')->unsigned()->default(0)->comment('城市');
			$table->integer('district')->unsigned()->default(0)->comment('县区');
			$table->integer('twon')->nullable()->default(0)->comment('乡镇');
			$table->string('address')->default('')->comment('地址');
			$table->string('zipcode', 60)->default('')->comment('邮政编码');
			$table->string('mobile', 60)->default('')->comment('手机');
			$table->string('email', 60)->default('')->comment('邮件');
			$table->string('shipping_code', 32)->default('')->comment('物流code');
			$table->string('shipping_name', 120)->default('')->comment('物流名称');
			$table->string('pay_code', 32)->default('')->comment('支付code');
			$table->string('pay_name', 120)->default('')->comment('支付方式名称');
			$table->string('invoice_title', 256)->nullable()->default('')->comment('发票抬头');
			$table->string('taxpayer', 30)->nullable()->default('')->comment('纳税人识别号');
			$table->string('invoice_desc', 30)->nullable()->comment('发票内容');
			$table->decimal('goods_price', 10)->default(0.00)->comment('商品总价');
			$table->decimal('shipping_price', 10)->default(0.00)->comment('邮费');
			$table->decimal('user_money', 10)->default(0.00)->comment('使用余额');
			$table->decimal('coupon_price', 10)->nullable()->default(0.00)->comment('优惠券抵扣');
			$table->integer('integral')->unsigned()->default(0)->comment('使用积分');
			$table->decimal('integral_money', 10)->default(0.00)->comment('使用积分抵多少钱');
			$table->decimal('order_amount', 10)->default(0.00)->comment('应付款金额');
			$table->decimal('total_amount', 10)->nullable()->default(0.00)->comment('订单总价');
			$table->integer('add_time')->unsigned()->default(0)->index('add_time')->comment('下单时间');
			$table->integer('shipping_time')->nullable()->default(0)->comment('最后新发货时间');
			$table->integer('confirm_time')->nullable()->default(0)->comment('收货确认时间');
			$table->integer('pay_time')->unsigned()->default(0)->comment('支付时间');
			$table->string('transaction_id')->nullable()->comment('第三方平台交易流水号');
			$table->integer('prom_id')->unsigned()->nullable()->default(0)->comment('活动ID');
			$table->boolean('prom_type')->nullable()->default(0)->comment('订单类型：0普通订单4预售订单5虚拟订单6拼团订单');
			$table->smallInteger('order_prom_id')->default(0)->comment('活动id');
			$table->decimal('order_prom_amount', 10)->default(0.00)->comment('活动优惠金额');
			$table->decimal('discount', 10)->default(0.00)->comment('价格调整');
			$table->string('user_note')->default('')->comment('用户备注');
			$table->string('admin_note')->nullable()->default('')->comment('管理员备注');
			$table->string('parent_sn', 100)->nullable()->comment('父单单号');
			$table->boolean('is_distribut')->nullable()->default(0)->comment('是否已分成0未分成1已分成');
			$table->decimal('paid_money', 10)->nullable()->default(0.00)->comment('订金');
			$table->integer('shop_id')->unsigned()->default(0)->comment('自提点门店id');
			$table->boolean('deleted')->default(0)->comment('用户假删除标识,1:删除,0未删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_order');
	}

}
