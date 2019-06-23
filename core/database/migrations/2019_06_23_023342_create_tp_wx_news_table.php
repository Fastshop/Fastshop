<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_news', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('图文子素材id');
			$table->integer('update_time')->unsigned()->nullable()->comment('更新时间');
			$table->string('title', 64)->nullable()->default('')->comment('标题');
			$table->integer('material_id')->unsigned()->nullable()->comment('图片素材id，一个图片为素材可包括几个子图文');
			$table->string('author', 8)->nullable()->default('')->comment('作者');
			$table->text('content', 65535)->nullable()->comment('html内容');
			$table->string('digest', 120)->nullable()->default('')->comment('摘要');
			$table->text('thumb_url', 65535)->nullable()->comment('封面链接');
			$table->string('thumb_media_id', 64)->nullable()->default('')->comment('封面媒体id');
			$table->text('content_source_url', 65535)->nullable()->comment('原文链接');
			$table->integer('show_cover_pic')->nullable()->default(0)->comment('是否显示封面');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_news');
	}

}
