<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_images', function(Blueprint $table)
		{
			$table->increments('img_id')->comment('图片id 自增');
			$table->integer('goods_id')->unsigned()->default(0)->index('goods_id')->comment('商品id');
			$table->string('image_url')->default('')->comment('图片地址');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_images');
	}

}
