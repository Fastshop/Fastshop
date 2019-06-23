<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAdPositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_ad_position', function(Blueprint $table)
		{
			$table->increments('position_id')->comment('表id');
			$table->string('position_name', 60)->default('')->comment('广告位置名称');
			$table->smallInteger('ad_width')->unsigned()->default(0)->comment('广告位宽度');
			$table->smallInteger('ad_height')->unsigned()->default(0)->comment('广告位高度');
			$table->string('position_desc')->default('')->comment('广告描述');
			$table->text('position_style', 65535)->nullable()->comment('模板');
			$table->boolean('is_open')->nullable()->default(0)->comment('0关闭1开启');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_ad_position');
	}

}
