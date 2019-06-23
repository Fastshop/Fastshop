<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_region', function(Blueprint $table)
		{
			$table->increments('id')->comment('表id');
			$table->string('name', 32)->nullable()->comment('地区名称');
			$table->boolean('level')->nullable()->default(0)->comment('地区等级 分省市县区');
			$table->integer('parent_id')->nullable()->comment('父id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_region');
	}

}
