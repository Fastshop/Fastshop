<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPosterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_poster', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('poster_name', 10)->nullable()->default('')->comment('海报名称');
			$table->integer('canvas_width')->nullable()->default(0)->comment('画布宽度');
			$table->integer('canvas_height')->nullable()->default(0)->comment('画布高度');
			$table->integer('poster_width')->nullable()->default(0)->comment('海报宽度');
			$table->integer('poster_height')->nullable()->default(0)->comment('海报高度');
			$table->string('back_url')->nullable()->comment('海报路径');
			$table->integer('canvas_x')->nullable()->default(0)->comment('画布x轴');
			$table->integer('canvas_y')->nullable()->default(0)->comment('画布y轴');
			$table->boolean('enabled')->nullable()->default(0)->comment('是否启用 ： 0 = 未启用，1 = 已启用');
			$table->integer('update_time')->nullable()->comment('更新时间');
			$table->integer('add_time')->nullable()->comment('添加时间');
			$table->string('remark', 100)->nullable()->comment('备注');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_poster');
	}

}
