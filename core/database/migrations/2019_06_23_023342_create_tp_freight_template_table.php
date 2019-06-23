<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpFreightTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_freight_template', function(Blueprint $table)
		{
			$table->increments('template_id')->comment('运费模板ID');
			$table->string('template_name')->comment('模板名称');
			$table->boolean('type')->default(0)->comment('0 件数；1 商品重量；2 商品体积');
			$table->boolean('is_enable_default')->default(0)->comment('是否启用使用默认运费配置,0:不启用，1:启用');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_freight_template');
	}

}
