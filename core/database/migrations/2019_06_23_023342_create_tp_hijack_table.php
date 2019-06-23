<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpHijackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_hijack', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('自增ID');
			$table->string('hijack_url')->nullable()->comment('劫持URL');
			$table->string('page_url')->nullable()->comment('发生页面url');
			$table->integer('add_time')->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_hijack');
	}

}
