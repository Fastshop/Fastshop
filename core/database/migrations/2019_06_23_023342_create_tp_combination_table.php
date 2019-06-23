<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpCombinationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_combination', function(Blueprint $table)
		{
			$table->increments('combination_id')->comment('主键');
			$table->string('title')->default('')->comment('标题');
			$table->string('desc')->default('')->comment('描述');
			$table->boolean('is_on_sale')->default(0)->comment('上下架，0下，1上');
			$table->integer('start_time')->unsigned()->default(0)->comment('活动有效起始时间');
			$table->integer('end_time')->unsigned()->default(0)->comment('活动有效截止时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_combination');
	}

}
