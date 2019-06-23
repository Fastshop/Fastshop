<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShopImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shop_images', function(Blueprint $table)
		{
			$table->integer('shop_id')->unsigned()->default(0)->index('shop_id')->comment('门店id');
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
		Schema::drop('tp_shop_images');
	}

}
