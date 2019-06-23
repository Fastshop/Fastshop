<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSpecGoodsPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_spec_goods_price', function(Blueprint $table)
		{
			$table->bigInteger('item_id', true)->unsigned()->comment('规格商品id');
			$table->integer('goods_id')->nullable()->default(0)->comment('商品id');
			$table->string('key')->nullable()->index('key')->comment('规格键名');
			$table->string('key_name')->nullable()->comment('规格键名中文');
			$table->decimal('price', 10)->nullable()->comment('价格');
			$table->decimal('cost_price', 10)->unsigned()->default(0.00)->comment('成本价');
			$table->decimal('commission', 10)->unsigned()->default(0.00)->comment('佣金用于分销分成');
			$table->integer('store_count')->unsigned()->nullable()->default(10)->comment('库存数量');
			$table->string('bar_code', 32)->nullable()->default('')->comment('商品条形码');
			$table->string('sku', 128)->nullable()->default('')->comment('SKU');
			$table->string('spec_img')->nullable()->comment('规格商品主图');
			$table->integer('prom_id')->nullable()->default(0)->comment('活动id');
			$table->boolean('prom_type')->nullable()->default(0)->comment('参加活动类型');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_spec_goods_price');
	}

}
