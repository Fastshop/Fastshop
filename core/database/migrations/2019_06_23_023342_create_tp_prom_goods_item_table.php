<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPromGoodsItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_prom_goods_item', function(Blueprint $table)
		{
			$table->integer('prom_id')->unsigned()->comment('活动id');
			$table->integer('goods_id')->unsigned()->comment('商品id');
			$table->integer('item_id')->comment('商品规格id');
			$table->string('goods_name', 120)->comment('商品名称');
			$table->decimal('price', 10)->default(0.00)->comment('价格');
			$table->string('image')->nullable()->comment('商品图片');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_prom_goods_item');
	}

}
