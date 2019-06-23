<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_suppliers', function(Blueprint $table)
		{
			$table->smallInteger('suppliers_id', true)->unsigned()->comment('供应商ID');
			$table->string('suppliers_name')->default('')->comment('供应商名称');
			$table->text('suppliers_desc', 16777215)->comment('供应商描述');
			$table->boolean('is_check')->default(1)->comment('供应商状态');
			$table->string('suppliers_contacts')->default('')->comment('供应商联系人');
			$table->string('suppliers_phone', 20)->default('')->comment('供应商电话');
			$table->integer('province_id')->unsigned()->nullable()->comment('所在省份id');
			$table->integer('city_id')->unsigned()->nullable()->comment('所在城市id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_suppliers');
	}

}
