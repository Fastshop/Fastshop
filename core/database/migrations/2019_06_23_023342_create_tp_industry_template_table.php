<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpIndustryTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_industry_template', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('industry_id')->unsigned()->comment('行业id');
			$table->integer('style_id')->unsigned()->comment('风格id');
			$table->string('template_name', 64)->comment('模板名称');
			$table->text('template_html')->comment('保存编辑后的HTML');
			$table->integer('add_time')->unsigned()->comment('添加时间');
			$table->text('block_info')->comment('接口数据');
			$table->string('thumb')->nullable()->comment('图片展示');
			$table->string('code_url')->nullable()->comment('二维码');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_industry_template');
	}

}
