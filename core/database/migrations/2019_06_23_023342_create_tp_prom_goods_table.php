<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPromGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_prom_goods', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->comment('活动ID');
			$table->string('title', 60)->default('')->comment('促销活动名称');
			$table->integer('type')->default(0)->comment('促销类型');
			$table->string('expression', 100)->default('')->comment('优惠体现');
			$table->text('description', 65535)->nullable()->comment('活动描述');
			$table->integer('start_time')->comment('活动开始时间');
			$table->integer('end_time')->comment('活动结束时间');
			$table->boolean('is_end')->nullable()->default(0)->comment('是否已结束');
			$table->string('group')->nullable()->comment('适用范围');
			$table->string('prom_img', 150)->nullable()->comment('活动宣传图片');
			$table->integer('buy_limit')->nullable()->comment('每人限购数');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_prom_goods');
	}

}
