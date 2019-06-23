<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShippingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shipping', function(Blueprint $table)
		{
			$table->increments('shipping_id')->comment('物流公司id');
			$table->string('shipping_name')->default('')->comment('物流公司名称');
			$table->string('shipping_code')->default('')->comment('物流公司编码');
			$table->boolean('is_open')->nullable()->default(1)->comment('是否启用');
			$table->string('shipping_desc')->default('')->comment('物流描述');
			$table->string('shipping_logo')->default('')->comment('物流公司logo');
			$table->integer('template_width')->unsigned()->default(0)->comment('运单模板宽度');
			$table->integer('template_height')->unsigned()->default(0)->comment('运单模板高度');
			$table->integer('template_offset_x')->unsigned()->default(0)->comment('运单模板左偏移量');
			$table->integer('template_offset_y')->unsigned()->default(0)->comment('运单模板上偏移量');
			$table->string('template_img')->default('')->comment('运单模板图片');
			$table->text('template_html', 65535)->comment('打印项偏移校正');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_shipping');
	}

}
