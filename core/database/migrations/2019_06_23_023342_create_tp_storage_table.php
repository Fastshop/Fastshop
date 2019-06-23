<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpStorageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_storage', function(Blueprint $table)
		{
			$table->increments('storage_id');
			$table->string('storage_name', 128)->comment('仓储名称');
			$table->boolean('is_open')->nullable()->default(1)->comment('仓储是否启用  0不启用  1启用');
			$table->integer('province_id')->unsigned()->comment('省id');
			$table->integer('city_id')->unsigned()->comment('市id');
			$table->integer('district_id')->unsigned()->comment('区id');
			$table->string('address')->comment('仓储详细地址');
			$table->string('name', 120)->comment('仓储负责人姓名');
			$table->char('mobile', 15)->comment('仓储负责人联系电话');
			$table->integer('capacity')->unsigned()->comment('仓储容量(前台取用单位立方米)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_storage');
	}

}
