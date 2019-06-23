<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserLabelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_label', function(Blueprint $table)
		{
			$table->increments('id')->comment('标签名称');
			$table->char('label_name', 30)->comment('标签名称');
			$table->boolean('label_order')->comment('标签排序');
			$table->string('label_code', 80)->comment('标签图片');
			$table->string('label_describe')->nullable()->comment('标签描述');
			$table->enum('is_recommend', array('1','0'))->default('0')->comment('是否推荐:0=否,1=是');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_label');
	}

}
