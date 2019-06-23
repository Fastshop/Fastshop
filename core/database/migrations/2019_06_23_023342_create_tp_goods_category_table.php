<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_category', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned()->comment('商品分类id');
			$table->string('name', 90)->default('')->comment('商品分类名称');
			$table->string('mobile_name', 64)->nullable()->default('')->comment('手机端显示的商品分类名');
			$table->smallInteger('parent_id')->unsigned()->default(0)->index('parent_id')->comment('父id');
			$table->string('parent_id_path', 128)->nullable()->default('')->comment('家族图谱');
			$table->boolean('level')->nullable()->default(0)->comment('等级');
			$table->boolean('sort_order')->default(50)->comment('顺序排序');
			$table->boolean('is_show')->default(1)->comment('是否显示');
			$table->string('image', 512)->nullable()->default('')->comment('分类图片');
			$table->boolean('is_hot')->nullable()->default(0)->comment('是否推荐为热门分类');
			$table->boolean('cat_group')->nullable()->default(0)->comment('分类分组默认0');
			$table->boolean('commission_rate')->nullable()->default(0)->comment('分佣比例');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_category');
	}

}
