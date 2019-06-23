<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShippingAreaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shipping_area', function(Blueprint $table)
		{
			$table->smallInteger('shipping_area_id', true)->unsigned()->comment('表id');
			$table->string('shipping_area_name', 150)->default('')->comment('配送区域名称');
			$table->string('shipping_code', 50)->default('0')->index('shipping_id')->comment('物流id');
			$table->text('config', 65535)->comment('配置首重续重等...序列化存储');
			$table->integer('update_time')->nullable()->comment('更新时间');
			$table->boolean('is_default')->nullable()->default(0)->comment('是否默认');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_shipping_area');
	}

}
