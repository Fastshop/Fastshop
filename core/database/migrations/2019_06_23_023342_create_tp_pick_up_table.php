<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPickUpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_pick_up', function(Blueprint $table)
		{
			$table->integer('pickup_id', true)->comment('自提点id');
			$table->string('pickup_name')->default('')->comment('自提点名称');
			$table->string('pickup_pic')->nullable()->comment('门店头像');
			$table->text('pickup_details', 65535)->nullable()->comment('门店简介');
			$table->string('pickup_address')->default('')->comment('自提点地址');
			$table->string('pickup_phone', 30)->default('')->comment('自提点电话');
			$table->string('pickup_contact', 20)->default('')->comment('自提点联系人');
			$table->integer('province_id')->comment('省id');
			$table->integer('city_id')->comment('市id');
			$table->integer('district_id')->comment('区id');
			$table->decimal('longitude', 10, 7)->nullable()->default(0.0000000)->comment('经度');
			$table->decimal('latitude', 10, 7)->nullable()->default(0.0000000)->comment('纬度');
			$table->boolean('open')->nullable()->default(0)->comment('营业开始时间');
			$table->boolean('close')->nullable()->default(0)->comment('营业打烊时间');
			$table->integer('suppliersid')->comment('供应商id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_pick_up');
	}

}
