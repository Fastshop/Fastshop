<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_comment', function(Blueprint $table)
		{
			$table->increments('comment_id')->comment('评论id');
			$table->integer('goods_id')->unsigned()->default(0)->index('id_value')->comment('商品id');
			$table->string('email', 60)->default('')->comment('email邮箱');
			$table->string('username', 60)->default('')->comment('用户名');
			$table->text('content', 65535)->comment('评论内容');
			$table->integer('add_time')->unsigned()->default(0)->comment('添加时间');
			$table->string('ip_address', 15)->default('')->comment('ip地址');
			$table->boolean('is_show')->default(0)->comment('是否显示');
			$table->integer('parent_id')->unsigned()->default(0)->index('parent_id')->comment('父id');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('评论用户');
			$table->text('img', 65535)->nullable()->comment('晒单图片');
			$table->integer('order_id')->nullable()->default(0)->index('order_id')->comment('订单id');
			$table->boolean('deliver_rank')->default(0)->comment('物流评价等级');
			$table->boolean('goods_rank')->nullable()->default(0)->comment('商品评价等级');
			$table->boolean('service_rank')->nullable()->default(0)->comment('商家服务态度评价等级');
			$table->integer('zan_num')->default(0)->comment('被赞数');
			$table->string('zan_userid')->default('')->comment('点赞用户id');
			$table->boolean('is_anonymous')->default(0)->comment('是否匿名评价:0不是，1是');
			$table->integer('rec_id')->nullable()->comment('订单商品表ID');
			$table->integer('sort')->unsigned()->default(100)->comment('排序');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_comment');
	}

}
