<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPromOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_prom_order', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('name', 60)->default('')->comment('活动名称');
			$table->integer('type')->default(0)->comment('活动类型');
			$table->float('money', 10)->nullable()->default(0.00)->comment('最小金额');
			$table->string('expression', 100)->nullable()->comment('优惠体现');
			$table->text('description', 65535)->nullable()->comment('活动描述');
			$table->integer('start_time')->nullable()->comment('活动开始时间');
			$table->integer('end_time')->nullable()->comment('活动结束时间');
			$table->boolean('is_close')->nullable()->default(0);
			$table->string('group')->nullable()->comment('适用范围');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_prom_order');
	}

}
