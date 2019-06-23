<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTeamGoodsItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_team_goods_item', function(Blueprint $table)
		{
			$table->integer('team_id')->unsigned();
			$table->integer('goods_id')->unsigned()->default(0)->comment('商品ID');
			$table->integer('item_id')->unsigned()->default(0)->comment('商品规格ID');
			$table->decimal('team_price', 10)->unsigned()->default(0.00)->comment('拼团价');
			$table->integer('sales_sum')->unsigned()->default(0)->comment('已拼多少件');
			$table->boolean('deleted')->default(0)->comment('是否已删除0否，1删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_team_goods_item');
	}

}
