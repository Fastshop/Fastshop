<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_article', function(Blueprint $table)
		{
			$table->increments('article_id');
			$table->smallInteger('cat_id')->default(0)->index('cat_id')->comment('类别ID');
			$table->string('title', 150)->default('')->comment('文章标题');
			$table->text('content');
			$table->string('author', 30)->default('')->comment('文章作者');
			$table->string('author_email', 60)->default('')->comment('作者邮箱');
			$table->string('keywords')->default('')->comment('关键字');
			$table->boolean('article_type')->default(2);
			$table->boolean('is_open')->default(1)->comment('是否显示,1:显示;0:不显示');
			$table->integer('add_time')->unsigned()->default(0);
			$table->string('file_url')->default('')->comment('附件地址');
			$table->boolean('open_type')->default(0);
			$table->string('link')->default('')->comment('链接地址');
			$table->text('description', 16777215)->nullable()->comment('文章摘要');
			$table->integer('click')->nullable()->default(0)->comment('浏览量');
			$table->integer('publish_time')->nullable()->comment('文章预告发布时间');
			$table->string('thumb')->nullable()->default('')->comment('文章缩略图');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_article');
	}

}
