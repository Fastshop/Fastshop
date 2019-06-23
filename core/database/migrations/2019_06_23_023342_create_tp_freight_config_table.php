<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpFreightConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_freight_config', function(Blueprint $table)
		{
			$table->increments('config_id')->comment('配置id');
			$table->float('first_unit', 16, 4)->default(0.0000)->comment('首(重：体积：件）');
			$table->decimal('first_money', 10)->unsigned()->default(0.00)->comment('首(重：体积：件）运费');
			$table->float('continue_unit', 16, 4)->unsigned()->default(0.0000)->comment('继续加（件：重量：体积）区间');
			$table->decimal('continue_money', 10)->unsigned()->default(0.00)->comment('继续加（件：重量：体积）的运费');
			$table->integer('template_id')->unsigned()->default(0)->comment('运费模板ID');
			$table->boolean('is_default')->default(0)->comment('是否是默认运费配置.0不是，1是');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_freight_config');
	}

}
