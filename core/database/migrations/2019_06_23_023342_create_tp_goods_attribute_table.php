<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_attribute', function(Blueprint $table)
		{
			$table->increments('attr_id')->comment('属性id');
			$table->string('attr_name', 60)->default('')->comment('属性名称');
			$table->smallInteger('type_id')->unsigned()->default(0)->index('cat_id')->comment('属性分类id');
			$table->boolean('attr_index')->default(0)->comment('是否显示0不显示1显示');
			$table->text('attr_values', 65535)->comment('可选值列表');
			$table->boolean('order')->default(50)->comment('属性排序');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_attribute');
	}

}
