<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTeamLotteryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_team_lottery', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable()->default(0)->comment('幸运儿手机');
			$table->integer('order_id')->nullable()->default(0)->comment('订单id');
			$table->string('order_sn', 50)->nullable();
			$table->string('mobile', 20)->nullable()->default('')->comment('幸运儿手机');
			$table->integer('team_id')->nullable()->default(0)->comment('拼团活动ID');
			$table->string('nickname', 100)->nullable()->default('')->comment('会员昵称');
			$table->string('head_pic', 150)->nullable()->default('')->comment('幸运儿头像');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_team_lottery');
	}

}
