<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpDeliveryDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_delivery_doc', function(Blueprint $table)
		{
			$table->increments('id')->comment('发货单ID');
			$table->integer('order_id')->unsigned()->index('order_id')->comment('订单ID');
			$table->string('order_sn', 64)->default('')->comment('订单编号');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->integer('admin_id')->unsigned()->default(0)->comment('管理员ID');
			$table->string('consignee', 64)->default('')->comment('收货人');
			$table->string('zipcode', 6)->nullable()->comment('邮编');
			$table->string('mobile', 20)->default('')->comment('联系手机');
			$table->integer('country')->unsigned()->comment('国ID');
			$table->integer('province')->unsigned()->comment('省ID');
			$table->integer('city')->unsigned()->comment('市ID');
			$table->integer('district')->unsigned()->comment('区ID');
			$table->string('address')->default('')->comment('地址');
			$table->string('shipping_code', 32)->nullable()->comment('物流code');
			$table->string('shipping_name', 64)->nullable()->comment('快递名称');
			$table->decimal('shipping_price', 10)->nullable()->default(0.00)->comment('运费');
			$table->string('invoice_no')->nullable()->default('')->comment('物流单号');
			$table->string('tel', 64)->nullable()->comment('座机电话');
			$table->text('note', 65535)->nullable()->comment('管理员添加的备注信息');
			$table->integer('best_time')->nullable()->comment('友好收货时间');
			$table->integer('create_time')->comment('创建时间');
			$table->boolean('is_del')->nullable()->default(0)->comment('是否删除');
			$table->boolean('send_type')->nullable()->default(0)->comment('发货方式0自填快递1在线预约2电子面单3无需物流');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_delivery_doc');
	}

}
