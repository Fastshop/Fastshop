<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShopperLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shopper_log', function(Blueprint $table)
		{
			$table->increments('log_id')->comment('日志编号');
			$table->string('log_content', 50)->default('')->comment('日志内容');
			$table->integer('log_time')->unsigned()->comment('日志时间');
			$table->integer('log_shopper_id')->unsigned()->comment('卖家编号');
			$table->string('log_shopper_name', 50)->default('')->comment('门店帐号');
			$table->integer('log_shop_id')->unsigned()->comment('门店id');
			$table->string('log_shopper_ip', 50)->default('')->comment('门店ip');
			$table->string('log_url', 50)->default('')->comment('日志url');
			$table->boolean('log_state')->default(1)->comment('日志状态(0-失败 1-成功)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_shopper_log');
	}

}
