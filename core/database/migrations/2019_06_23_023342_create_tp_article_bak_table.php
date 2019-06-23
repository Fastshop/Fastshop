<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpArticleBakTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_article_bak', function(Blueprint $table)
		{
			$table->increments('article_id')->comment('表id');
			$table->smallInteger('cat_id')->default(0)->index('cat_id')->comment('类别ID');
			$table->smallInteger('cat_id2')->nullable()->default(0)->comment('扩展类别ID');
			$table->string('title', 150)->default('')->comment('文章标题');
			$table->text('content')->comment('文章内容');
			$table->string('author', 30)->default('')->comment('文章作者');
			$table->string('author_email', 60)->default('')->comment('作者邮箱');
			$table->string('keywords')->default('')->comment('关键字');
			$table->boolean('article_type')->default(2)->comment('文章类型');
			$table->boolean('is_open')->default(1)->comment('是否开启');
			$table->integer('add_time')->unsigned()->default(0)->comment('添加时间');
			$table->string('file_url')->default('')->comment('附件地址');
			$table->boolean('open_type')->default(0)->comment('open_type');
			$table->string('link')->default('')->comment('链接地址');
			$table->text('description', 16777215)->nullable()->comment('文章摘要');
			$table->integer('click')->nullable()->default(0)->comment('浏览量');
			$table->integer('publish_time')->nullable()->default(0)->comment('文章发布时间');
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
		Schema::drop('tp_article_bak');
	}

}
