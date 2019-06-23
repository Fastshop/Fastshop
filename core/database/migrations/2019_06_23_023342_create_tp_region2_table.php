<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpRegion2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_region2', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->string('name', 20)->comment('地区名称');
			$table->integer('parent_id')->nullable()->comment('父id');
			$table->boolean('level')->nullable()->comment('地区等级');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_region2');
	}

}
