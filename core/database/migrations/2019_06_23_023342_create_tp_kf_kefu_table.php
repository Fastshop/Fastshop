<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfKefuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_kefu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('user_name', 155)->nullable();
			$table->string('pwd', 155)->nullable()->comment('密码');
			$table->string('sign')->nullable();
			$table->string('avatar')->nullable();
			$table->boolean('status')->nullable()->default(0)->comment('0下线 1在线');
			$table->integer('storeid')->unsigned()->default(1)->comment('店铺id，默认1');
			$table->boolean('Auditing')->default(0)->comment('是否审核  0：待审核  1：审核通过  2：审核不通过');
			$table->string('store_name', 50)->comment('客服所属店铺名称');
			$table->boolean('is_delete')->default(0)->comment('是否删除  0：未删除 1：已删除');
			$table->smallInteger('role')->unsigned()->default(5)->comment('组ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_kefu');
	}

}
