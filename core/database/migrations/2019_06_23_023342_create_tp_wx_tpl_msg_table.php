<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxTplMsgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_tpl_msg', function(Blueprint $table)
		{
			$table->increments('id')->comment('微信模板消息');
			$table->string('title', 32)->nullable()->default('')->comment('模板标题');
			$table->string('template_sn', 64)->nullable()->default('')->comment('模板编号');
			$table->string('template_id', 64)->nullable()->default('')->comment('模板id');
			$table->string('remark')->nullable()->default('')->comment('留言');
			$table->boolean('is_use')->nullable()->default(0)->comment('该模板是否启用');
			$table->integer('add_time')->unsigned()->nullable()->comment('添加模板的时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_tpl_msg');
	}

}
