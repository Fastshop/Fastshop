<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTeamFollowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_team_follow', function(Blueprint $table)
		{
			$table->increments('follow_id');
			$table->integer('follow_user_id')->nullable()->default(0)->comment('参团会员id');
			$table->string('follow_user_nickname', 100)->nullable()->comment('参团会员昵称');
			$table->string('follow_user_head_pic')->nullable()->comment('会员头像');
			$table->integer('follow_time')->nullable()->default(0)->comment('参团时间');
			$table->integer('order_id')->nullable()->default(0)->comment('订单id');
			$table->integer('found_id')->nullable()->default(0)->comment('开团ID');
			$table->integer('found_user_id')->nullable()->default(0)->comment('开团人user_id');
			$table->integer('team_id')->nullable()->default(0)->comment('拼团活动id');
			$table->boolean('status')->nullable()->default(0)->comment('参团状态0:待拼单(表示已下单但是未支付)1拼单成功(已支付)2成团成功3成团失败');
			$table->boolean('is_win')->nullable()->default(0)->comment('抽奖团是否中奖');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_team_follow');
	}

}
