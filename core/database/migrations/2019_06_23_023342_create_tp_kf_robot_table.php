<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfRobotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_robot', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('robot_name', 32)->comment('名称');
			$table->string('avatar')->nullable()->comment('头像');
			$table->integer('storeid')->unsigned()->comment('店铺id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_robot');
	}

}
