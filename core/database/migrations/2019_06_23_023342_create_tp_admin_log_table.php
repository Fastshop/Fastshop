<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAdminLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_admin_log', function(Blueprint $table)
		{
			$table->bigInteger('log_id', true)->unsigned()->comment('表id');
			$table->integer('admin_id')->nullable()->comment('管理员id');
			$table->string('log_info')->nullable()->comment('日志描述');
			$table->string('log_ip', 30)->nullable()->comment('ip地址');
			$table->string('log_url', 50)->nullable()->comment('url');
			$table->integer('log_time')->nullable()->comment('日志时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_admin_log');
	}

}
