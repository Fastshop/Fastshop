<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_admin', function(Blueprint $table)
		{
			$table->smallInteger('admin_id', true)->unsigned()->comment('用户id');
			$table->string('user_name', 60)->default('')->index('user_name')->comment('用户名');
			$table->string('email', 60)->default('')->comment('email');
			$table->string('password', 32)->default('')->comment('密码');
			$table->string('ec_salt', 10)->nullable()->comment('秘钥');
			$table->integer('add_time')->default(0)->comment('添加时间');
			$table->integer('last_login')->default(0)->comment('最后登录时间');
			$table->string('last_ip', 15)->default('')->comment('最后登录ip');
			$table->text('nav_list', 65535)->nullable()->comment('权限');
			$table->string('lang_type', 50)->default('')->comment('lang_type');
			$table->smallInteger('agency_id')->unsigned()->default(0)->index('agency_id')->comment('agency_id');
			$table->smallInteger('suppliers_id')->unsigned()->nullable()->default(0)->comment('suppliers_id');
			$table->text('todolist')->nullable()->comment('todolist');
			$table->smallInteger('role_id')->nullable()->default(0)->comment('角色id');
			$table->integer('province_id')->unsigned()->nullable()->default(0)->comment('加盟商省级id');
			$table->integer('city_id')->unsigned()->nullable()->default(0)->comment('加盟商市级id');
			$table->integer('district_id')->unsigned()->nullable()->default(0)->comment('加盟商区级id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_admin');
	}

}
