<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShopOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shop_order', function(Blueprint $table)
		{
			$table->increments('shop_order_id')->comment('提货核销码。主键');
			$table->integer('order_id');
			$table->string('order_sn', 20);
			$table->integer('shop_id')->unsigned()->default(0)->comment('门店id');
			$table->dateTime('take_time')->comment('提货时间');
			$table->boolean('is_write_off')->default(0)->comment('是否核销。0未核销，1已核销');
			$table->integer('write_off_time')->unsigned()->default(0)->comment('核销时间');
			$table->integer('add_time')->unsigned()->default(0)->comment('记录插入时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_shop_order');
	}

}
