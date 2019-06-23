<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_reply', function(Blueprint $table)
		{
			$table->integer('reply_id', true)->comment('回复id');
			$table->integer('comment_id')->comment('评论id：关联评论表');
			$table->integer('parent_id')->default(0)->comment('父类id，0为最顶级');
			$table->text('content', 65535)->comment('回复内容');
			$table->string('user_name')->default('')->comment('回复人的昵称');
			$table->string('to_name')->default('')->comment('被回复人的昵称');
			$table->boolean('deleted')->default(0)->comment('未删除0；删除：1');
			$table->integer('reply_time')->unsigned()->comment('回复时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_reply');
	}

}
