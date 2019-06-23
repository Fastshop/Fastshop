<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpFlashSaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_flash_sale', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('title', 200)->default('')->comment('活动标题');
			$table->integer('goods_id')->comment('参团商品ID');
			$table->bigInteger('item_id')->nullable()->default(0)->comment('对应spec_goods_price商品规格id');
			$table->float('price', 10)->comment('活动价格');
			$table->integer('goods_num')->nullable()->default(1)->comment('商品参加活动数');
			$table->integer('buy_limit')->default(1)->comment('每人限购数');
			$table->integer('buy_num')->default(0)->comment('已购买人数');
			$table->integer('order_num')->nullable()->default(0)->comment('已下单数');
			$table->text('description', 65535)->nullable()->comment('活动描述');
			$table->integer('start_time')->comment('开始时间');
			$table->integer('end_time')->comment('结束时间');
			$table->boolean('is_end')->nullable()->default(0)->comment('是否已结束');
			$table->string('goods_name')->nullable()->comment('商品名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_flash_sale');
	}

}
