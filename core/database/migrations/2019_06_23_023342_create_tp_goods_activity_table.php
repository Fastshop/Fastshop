<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_activity', function(Blueprint $table)
		{
			$table->increments('act_id')->comment('活动ID');
			$table->string('act_name')->default('')->comment('活动名称');
			$table->text('act_desc', 65535)->comment('活动描述');
			$table->boolean('act_type')->default(0)->comment('活动类型:1预售2拼团');
			$table->integer('goods_id')->unsigned()->default(0)->comment('参加活动商品ID');
			$table->integer('spec_id')->unsigned()->default(0)->comment('商品规格ID');
			$table->string('goods_name')->default('')->comment('商品名称');
			$table->integer('start_time')->unsigned()->comment('活动开始时间');
			$table->integer('end_time')->unsigned()->comment('活动结束时间');
			$table->boolean('is_finished')->default(0)->comment('是否已结束:0,正常；1,成功结束；2，失败结束。');
			$table->text('ext_info', 65535)->comment('活动扩展配置');
			$table->integer('act_count')->default(0)->comment('商品购买数');
			$table->index(['act_name','act_type','goods_id'], 'act_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_activity');
	}

}
