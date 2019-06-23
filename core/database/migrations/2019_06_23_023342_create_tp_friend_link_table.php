<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpFriendLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_friend_link', function(Blueprint $table)
		{
			$table->smallInteger('link_id', true)->unsigned()->comment('表id');
			$table->string('link_name')->default('')->comment('链接名称');
			$table->string('link_url')->default('')->comment('链接地址');
			$table->string('link_logo')->default('')->comment('链接logo');
			$table->boolean('orderby')->default(50)->index('show_order')->comment('排序');
			$table->boolean('is_show')->nullable()->default(1)->comment('是否显示');
			$table->boolean('target')->nullable()->default(1)->comment('是否新窗口打开');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_friend_link');
	}

}
