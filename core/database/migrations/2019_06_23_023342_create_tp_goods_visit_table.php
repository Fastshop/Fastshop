<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsVisitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_visit', function(Blueprint $table)
		{
			$table->integer('visit_id', true)->comment('自增ID');
			$table->integer('goods_id')->comment('商品ID');
			$table->integer('user_id')->index('user_id')->comment('会员ID');
			$table->integer('visittime')->comment('浏览时间');
			$table->integer('cat_id')->comment('商品分类ID');
			$table->integer('extend_cat_id')->comment('商品扩展分类ID');
			$table->primary(['goods_id','user_id','visit_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_visit');
	}

}
