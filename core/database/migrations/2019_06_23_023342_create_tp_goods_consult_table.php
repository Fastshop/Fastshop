<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsConsultTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods_consult', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('商品咨询id');
			$table->integer('goods_id')->nullable()->default(0)->comment('商品id');
			$table->string('username', 32)->nullable()->default('')->comment('网名');
			$table->integer('add_time')->nullable()->default(0)->comment('咨询时间');
			$table->boolean('consult_type')->nullable()->default(1)->comment('1 商品咨询 2 支付咨询 3 配送 4 售后');
			$table->string('content', 1024)->nullable()->default('')->comment('咨询内容');
			$table->integer('parent_id')->nullable()->default(0)->comment('父id 用于管理员回复');
			$table->boolean('is_show')->nullable()->default(0)->comment('是否显示');
			$table->boolean('status')->nullable()->default(0)->comment('管理员回复状态，0未回复，1已回复');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods_consult');
	}

}
