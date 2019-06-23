<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxImgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_img', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->char('keyword')->comment('关键词');
			$table->text('desc', 65535)->comment('简介');
			$table->char('pic')->comment('封面图片');
			$table->char('url')->comment('图文外链地址');
			$table->string('createtime', 13)->comment('创建时间');
			$table->string('uptatetime', 13)->comment('更新时间');
			$table->char('token', 30)->comment('token');
			$table->string('title', 60)->comment('标题');
			$table->integer('goods_id')->default(0)->comment('商品id');
			$table->string('goods_name', 50)->nullable()->comment('商品名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_img');
	}

}
