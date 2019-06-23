<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSpecImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_spec_image', function(Blueprint $table)
		{
			$table->integer('goods_id')->nullable()->default(0)->comment('商品规格图片表id');
			$table->integer('spec_image_id')->nullable()->default(0)->comment('规格项id');
			$table->string('src', 512)->nullable()->default('')->comment('商品规格图片路径');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_spec_image');
	}

}
