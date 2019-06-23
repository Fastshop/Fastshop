<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTeamFoundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_team_found', function(Blueprint $table)
		{
			$table->increments('found_id');
			$table->integer('found_time')->nullable()->default(0)->comment('开团时间');
			$table->integer('found_end_time')->nullable()->default(0)->comment('成团截止时间');
			$table->integer('user_id')->nullable()->default(0)->comment('团长id');
			$table->integer('team_id')->nullable()->default(0)->comment('拼团活动id');
			$table->string('nickname', 100)->nullable()->comment('团长用户名昵称');
			$table->string('head_pic')->nullable()->default('')->comment('团长头像');
			$table->integer('order_id')->nullable()->default(0)->comment('团长订单id');
			$table->integer('join')->nullable()->default(1)->comment('已参团人数');
			$table->integer('need')->nullable()->default(1)->comment('需多少人成团');
			$table->decimal('price', 10)->nullable()->default(0.00)->comment('拼团价格');
			$table->decimal('goods_price', 10)->nullable()->default(0.00)->comment('商品原价');
			$table->boolean('status')->nullable()->default(0)->comment('拼团状态0:待开团(表示已下单但是未支付)1:已经开团(团长已支付)2:拼团成功,3拼团失败');
			$table->boolean('bonus_status')->nullable()->default(0)->comment('团长佣金领取状态：0无1领取');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_team_found');
	}

}
