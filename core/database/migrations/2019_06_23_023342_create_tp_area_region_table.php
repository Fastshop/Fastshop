<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpAreaRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_area_region', function(Blueprint $table)
		{
			$table->integer('shipping_area_id')->unsigned()->default(0)->comment('物流配置id');
			$table->integer('region_id')->unsigned()->default(0)->comment('地区id对应region表id');
			$table->primary(['shipping_area_id','region_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_area_region');
	}

}
