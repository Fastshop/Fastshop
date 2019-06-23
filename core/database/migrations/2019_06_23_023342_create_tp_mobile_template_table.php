<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMobileTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_mobile_template', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('is_index')->default(0)->comment('是否设为首页 0否 1是');
			$table->string('template_name', 64)->comment('模板名称');
			$table->text('template_html')->comment('保存编辑后的HTML');
			$table->boolean('is_show')->default(1)->comment('是否显示 0不显示  1显示');
			$table->integer('add_time')->unsigned()->comment('添加时间');
			$table->text('block_info')->comment('接口数据');
			$table->boolean('type')->default(0)->comment('模板类型 0内页  1首页');
			$table->string('thumb', 64)->nullable()->comment('模板缩略图');
			$table->integer('style_id')->nullable()->default(0)->comment('从模板库中添加风格id，');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_mobile_template');
	}

}
