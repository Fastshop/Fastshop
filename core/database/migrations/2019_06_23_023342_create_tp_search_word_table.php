<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSearchWordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_search_word', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('搜索表ID');
			$table->string('keywords')->default('')->comment('搜索关键词，商品关键词');
			$table->string('pinyin_full')->default('')->comment('拼音全拼');
			$table->string('pinyin_simple')->default('')->comment('拼音简写');
			$table->integer('search_num')->default(0)->comment('搜索次数');
			$table->integer('goods_num')->default(0)->comment('商品数量');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_search_word');
	}

}
