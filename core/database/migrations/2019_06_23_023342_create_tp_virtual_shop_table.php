<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpVirtualShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_virtual_shop', function(Blueprint $table)
		{
			$table->integer('user_id')->nullable();
			$table->string('shop_name', 100)->nullable()->comment('店铺名称');
			$table->boolean('shop_level')->nullable()->default(0)->comment('店铺等级');
			$table->text('shop_intro', 65535)->nullable()->comment('店铺介绍');
			$table->string('shop_logo')->nullable()->comment('店铺logo');
			$table->string('shop_phone', 20)->nullable();
			$table->string('shop_qq', 20)->nullable();
			$table->boolean('shop_theme')->nullable()->default(0)->comment('店铺模板风格');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_virtual_shop');
	}

}
