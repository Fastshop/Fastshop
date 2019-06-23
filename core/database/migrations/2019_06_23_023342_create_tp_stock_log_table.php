<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpStockLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_stock_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->nullable()->comment('商品ID');
			$table->string('goods_name', 100)->nullable()->comment('商品名称');
			$table->string('goods_spec', 50)->nullable()->comment('商品规格');
			$table->string('order_sn', 30)->nullable()->comment('订单编号');
			$table->integer('muid')->nullable()->comment('操作用户ID');
			$table->integer('stock')->nullable()->comment('更改库存');
			$table->integer('ctime')->nullable()->comment('操作时间');
			$table->boolean('change_type')->default(0)->comment('更改操作类型 （默认）0订单出库 1商品录入 2退货入库 3盘点更改');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_stock_log');
	}

}
