<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_ad', function(Blueprint $table)
		{
			$table->increments('ad_id')->comment('广告id');
			$table->integer('pid')->unsigned()->default(0)->index('position_id')->comment('广告位置ID');
			$table->boolean('media_type')->default(0)->comment('广告类型');
			$table->string('ad_name', 60)->default('')->comment('广告名称');
			$table->string('ad_link')->default('')->comment('链接地址');
			$table->text('ad_code', 65535)->comment('图片地址');
			$table->integer('start_time')->default(0)->comment('投放时间');
			$table->integer('end_time')->default(0)->comment('结束时间');
			$table->string('link_man', 60)->default('')->comment('添加人');
			$table->string('link_email', 60)->default('')->comment('添加人邮箱');
			$table->string('link_phone', 60)->default('')->comment('添加人联系电话');
			$table->integer('click_count')->unsigned()->default(0)->comment('点击量');
			$table->boolean('enabled')->default(1)->index('enabled')->comment('是否显示');
			$table->smallInteger('orderby')->nullable()->default(50)->comment('排序');
			$table->boolean('target')->nullable()->default(0)->comment('是否开启浏览器新窗口');
			$table->string('bgcolor', 20)->nullable()->comment('背景颜色');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_ad');
	}

}
