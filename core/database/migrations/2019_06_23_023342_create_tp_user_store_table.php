<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_store', function(Blueprint $table)
		{
			$table->increments('id')->comment('表id');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户id');
			$table->string('store_name', 50)->nullable()->comment('店铺名');
			$table->string('true_name', 50)->nullable()->comment('真名');
			$table->string('qq', 20)->default('')->comment('QQ');
			$table->string('mobile', 20)->default('')->index('mobile')->comment('手机号码');
			$table->string('store_img')->default('')->comment('店铺图片');
			$table->integer('store_time')->unsigned()->comment('开店时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_store');
	}

}
