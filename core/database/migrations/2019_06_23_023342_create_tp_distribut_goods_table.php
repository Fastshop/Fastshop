<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpDistributGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_distribut_goods', function(Blueprint $table)
		{
			$table->integer('user_id')->nullable();
			$table->integer('goods_id')->nullable();
			$table->string('goods_name')->nullable()->comment('商品名称');
			$table->decimal('goods_price', 10)->nullable()->comment('商品价格');
			$table->integer('sales')->nullable()->comment('销量');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_distribut_goods');
	}

}
