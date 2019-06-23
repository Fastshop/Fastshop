<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpArticleCat2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_article_cat2', function(Blueprint $table)
		{
			$table->increments('cat_id')->comment('表id');
			$table->string('cat_name', 20)->nullable()->comment('类别名称');
			$table->smallInteger('cat_type')->nullable()->default(0)->comment('系统分组');
			$table->smallInteger('parent_id')->nullable()->comment('夫级ID');
			$table->boolean('show_in_nav')->nullable()->default(0)->comment('是否导航显示');
			$table->smallInteger('sort_order')->nullable()->default(50)->comment('排序');
			$table->string('cat_desc')->nullable()->comment('分类描述');
			$table->string('keywords', 30)->nullable()->comment('搜索关键词');
			$table->string('cat_alias', 20)->nullable()->comment('别名');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_article_cat2');
	}

}
