<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserDistributionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_distribution', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable()->index('user_id')->comment('分销会员id');
			$table->string('user_name', 50)->nullable()->comment('会员昵称');
			$table->integer('goods_id')->nullable()->index('goods_id')->comment('商品id');
			$table->string('goods_name', 150)->nullable()->comment('商品名称');
			$table->smallInteger('cat_id')->nullable()->default(0)->comment('商品分类ID');
			$table->integer('brand_id')->nullable()->default(0)->comment('商品品牌');
			$table->integer('share_num')->nullable()->default(0)->comment('分享次数');
			$table->integer('sales_num')->nullable()->default(0)->comment('分销销量');
			$table->integer('addtime')->nullable()->comment('加入个人分销库时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_distribution');
	}

}
