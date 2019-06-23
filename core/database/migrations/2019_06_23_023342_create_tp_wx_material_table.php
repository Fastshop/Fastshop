<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_material', function(Blueprint $table)
		{
			$table->increments('id')->comment('微信公众号素材');
			$table->string('media_id', 64)->nullable()->default('')->index('media_id')->comment('微信媒体id');
			$table->string('type', 10)->comment('素材类型：text、image、news、video');
			$table->text('data', 65535)->nullable()->comment('json数据');
			$table->integer('update_time')->unsigned()->nullable()->comment('更新时间');
			$table->char('key', 32)->nullable()->index('key')->comment('便于查询的key，现用于image');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_material');
	}

}
