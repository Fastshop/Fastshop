<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpMobileBlockInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_mobile_block_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('block_id')->comment('所属板块id');
			$table->integer('block_type')->unsigned()->comment('板块类型');
			$table->string('title', 120)->nullable()->comment('标题、描述、文字内容');
			$table->string('block_content')->nullable()->comment('其它信息');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_mobile_block_info');
	}

}
