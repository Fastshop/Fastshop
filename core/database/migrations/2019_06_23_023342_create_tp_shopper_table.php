<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShopperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shopper', function(Blueprint $table)
		{
			$table->increments('shopper_id')->comment('门店id');
			$table->string('shopper_name', 50)->default('')->comment('门店账号');
			$table->integer('user_id')->unsigned()->default(0)->comment('用户ID');
			$table->integer('shop_id')->default(0)->comment('门店Id');
			$table->integer('last_login_time')->unsigned()->default(0)->comment('最后登录时间');
			$table->integer('add_time')->unsigned()->nullable()->default(0)->comment('添加时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_shopper');
	}

}
