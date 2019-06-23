<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpFreightRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_freight_region', function(Blueprint $table)
		{
			$table->integer('template_id')->unsigned()->default(0)->comment('模板id');
			$table->integer('config_id')->unsigned()->default(0)->comment('运费模板配置ID');
			$table->integer('region_id')->unsigned()->default(0)->comment('region表id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_freight_region');
	}

}
