<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTeamActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_team_activity', function(Blueprint $table)
		{
			$table->integer('team_id', true);
			$table->string('act_name')->default('')->comment('拼团活动标题');
			$table->boolean('team_type')->default(0)->comment('拼团活动类型,0分享团1佣金团2抽奖团');
			$table->integer('time_limit')->default(0)->comment('成团有效期。单位（秒)');
			$table->integer('needer')->default(2)->comment('需要成团人数');
			$table->string('goods_name')->default('')->comment('商品名称');
			$table->integer('goods_id')->default(0)->comment('商品id');
			$table->decimal('bonus', 10)->default(0.00)->comment('团长佣金');
			$table->integer('stock_limit')->default(0)->comment('抽奖限量');
			$table->smallInteger('buy_limit')->default(0)->comment('单次团购买限制数0为不限制');
			$table->integer('sales_sum')->unsigned()->default(0)->comment('已拼多少件');
			$table->integer('virtual_num')->default(0)->comment('虚拟销售基数');
			$table->string('share_title', 100)->comment('分享标题');
			$table->string('share_desc')->comment('分享描述');
			$table->string('share_img', 150)->nullable()->comment('分享图片');
			$table->smallInteger('sort')->unsigned()->default(0)->comment('排序');
			$table->boolean('is_recommend')->default(0)->comment('是否推荐');
			$table->boolean('status')->default(0)->comment('0关闭1正常');
			$table->boolean('is_lottery')->default(0)->comment('是否已经抽奖.1是，0否');
			$table->boolean('deleted')->default(0)->comment('是否已删除0否，1删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_team_activity');
	}

}
