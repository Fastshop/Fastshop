<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserSignTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_sign', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable()->default(0)->comment('用户id');
			$table->integer('sign_total')->nullable()->default(0)->comment('累计签到天数');
			$table->integer('sign_count')->nullable()->default(0)->comment('连续签到天数');
			$table->char('sign_last', 11)->nullable()->default(0)->comment('最后签到时间，时间格式20170907');
			$table->text('sign_time', 65535)->nullable()->comment('历史签到时间，以逗号隔开');
			$table->integer('cumtrapz')->nullable()->default(0)->comment('用户累计签到总积分');
			$table->integer('this_month')->nullable()->comment('本月累计积分');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_sign');
	}

}
