<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_type', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned()->comment('id自增');
			$table->string('name', 60)->default('')->comment('类型名称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_type');
	}

}
