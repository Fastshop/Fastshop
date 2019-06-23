<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_store', function(Blueprint $table)
		{
			$table->increments('storeid')->comment('店铺id');
			$table->string('store_name', 55)->comment('店铺名称');
			$table->string('avatar')->comment('店铺头像');
			$table->boolean('auditing')->default(0)->comment('是否审核  0：待审核  1：审核通过  2：审核不通过');
			$table->integer('timeline')->unsigned()->nullable()->comment('提示语设置时间');
			$table->boolean('is_delete')->default(0)->comment('是否删除  0：未删除 1：已删除');
			$table->string('webid')->comment('网站域名');
			$table->char('phone', 11)->comment('企业电话');
			$table->string('city')->comment('企业地址');
			$table->string('email')->comment('企业邮箱');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_store');
	}

}
