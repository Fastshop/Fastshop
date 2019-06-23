<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsAttrTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_attr', function(Blueprint $table)
		{
			$table->increments('goods_attr_id')->comment('商品属性id自增');
			$table->integer('goods_id')->unsigned()->default(0)->index('goods_id')->comment('商品id');
			$table->smallInteger('attr_id')->unsigned()->default(0)->index('attr_id')->comment('属性id');
			$table->text('attr_value', 65535)->comment('属性值');
			$table->string('attr_price')->default('')->comment('属性价格');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_attr');
	}

}
