<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserCollectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_collection', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('用户下载收集表');
			$table->string('mobile', 11)->nullable()->default('')->comment('用户手机号');
			$table->string('contact', 32)->nullable()->default('')->comment('联系人');
			$table->string('why_down', 32)->nullable()->default('')->comment('下载原因');
			$table->integer('add_time')->nullable()->default(0)->comment('申请时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_collection');
	}

}
