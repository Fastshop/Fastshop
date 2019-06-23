<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpFeedbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_feedback', function(Blueprint $table)
		{
			$table->increments('msg_id')->comment('默认自增ID');
			$table->integer('parent_id')->unsigned()->default(0)->comment('回复留言ID');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户ID');
			$table->string('user_name', 60)->default('');
			$table->string('msg_title', 200)->default('')->comment('留言标题');
			$table->boolean('msg_type')->default(0)->comment('留言类型');
			$table->boolean('msg_status')->default(0)->comment('处理状态');
			$table->text('msg_content', 65535)->comment('留言内容');
			$table->integer('msg_time')->unsigned()->default(0)->comment('留言时间');
			$table->string('message_img')->default('');
			$table->integer('order_id')->unsigned()->default(0);
			$table->boolean('msg_area')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_feedback');
	}

}
