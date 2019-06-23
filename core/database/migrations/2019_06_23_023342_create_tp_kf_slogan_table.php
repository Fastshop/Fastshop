<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfSloganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_slogan', function(Blueprint $table)
		{
			$table->increments('id')->comment('提示语id主键');
			$table->string('slogan', 55)->nullable()->comment('标语（客服加载欢迎语）');
			$table->boolean('slogan_status')->nullable()->default(1)->comment('提示语状态  0：不开启  1：开启');
			$table->boolean('auditing')->default(0)->comment('是否审核提示语  0：待审核  1：审核通过  2：审核不通过');
			$table->integer('timeline')->unsigned()->nullable()->comment('提示语设置时间');
			$table->integer('storeid')->unsigned()->comment('提示语所属店铺id');
			$table->boolean('is_delete')->default(0)->comment('是否删除  0：未删除 1：已删除');
			$table->integer('kefuid')->unsigned()->default(0)->comment('客服id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_slogan');
	}

}
