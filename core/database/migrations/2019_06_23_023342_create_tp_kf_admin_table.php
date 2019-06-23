<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_admin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('login_name', 155);
			$table->string('password');
			$table->smallInteger('role')->unsigned()->comment('组ID');
			$table->boolean('status')->default(0)->comment('状态 1:启用 0:禁止');
			$table->string('remark')->nullable()->comment('备注说明');
			$table->integer('last_login_time')->unsigned()->comment('最后登录时间');
			$table->string('last_login_ip', 15)->nullable()->comment('最后登录IP');
			$table->string('last_location', 100)->nullable()->comment('最后登录位置');
			$table->integer('storeid')->unsigned()->comment('企业id（店铺id）');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_admin');
	}

}
