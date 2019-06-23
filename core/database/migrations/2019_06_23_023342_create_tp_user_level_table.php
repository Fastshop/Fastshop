<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserLevelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_level', function(Blueprint $table)
		{
			$table->smallInteger('level_id', true)->unsigned()->comment('表id');
			$table->string('level_name', 30)->nullable()->comment('头衔名称');
			$table->decimal('amount', 10)->nullable()->comment('等级必要金额');
			$table->smallInteger('discount')->nullable()->default(0)->comment('折扣');
			$table->string('describe', 200)->nullable()->comment('头街 描述');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_level');
	}

}
