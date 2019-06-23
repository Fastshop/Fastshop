<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfSuggestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_suggest', function(Blueprint $table)
		{
			$table->increments('id')->comment('客户意见反馈主键id');
			$table->integer('storeid')->unsigned()->comment('店铺id');
			$table->string('kehuid')->comment('客户id');
			$table->boolean('is_satisfied')->default(3)->comment('满意度 0：很不满意  1：不满意 2：一般 3：满意 4：非常满意');
			$table->string('suggest')->nullable()->comment('建议');
			$table->integer('timeline')->unsigned()->nullable()->comment('反馈时间');
			$table->boolean('is_delete')->comment('是否删除  0：未删除   1：已删除');
			$table->integer('kefu_id')->unsigned()->comment('客服id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_suggest');
	}

}
