<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpDistributLevelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_distribut_level', function(Blueprint $table)
		{
			$table->boolean('level_id')->primary();
			$table->boolean('level_type')->nullable()->default(0)->comment('分销等级类别');
			$table->decimal('rate1', 6)->nullable()->default(0.00)->comment('一级佣金比例');
			$table->decimal('rate2', 6)->nullable()->default(0.00)->comment('二级佣金比例');
			$table->decimal('rate3', 6)->nullable()->default(0.00)->comment('三级佣金比例');
			$table->decimal('order_money', 12)->nullable()->default(0.00)->comment('升级条件');
			$table->string('level_name', 30)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_distribut_level');
	}

}
