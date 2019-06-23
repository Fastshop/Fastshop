<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpCombinationGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_combination_goods', function(Blueprint $table)
		{
			$table->integer('combination_id');
			$table->string('goods_name')->default('')->comment('商品名称');
			$table->string('key_name')->default('')->comment('规格名称');
			$table->integer('goods_id');
			$table->integer('item_id');
			$table->decimal('original_price', 10)->unsigned()->default(0.00)->comment('原价/商城价');
			$table->decimal('price', 10)->unsigned()->default(0.00)->comment('优惠价格');
			$table->boolean('is_master')->default(0)->comment('1主0从');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_combination_goods');
	}

}
