<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSpecItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_spec_item', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('规格项id');
			$table->integer('spec_id')->nullable()->comment('规格id');
			$table->string('item', 54)->nullable()->comment('规格项');
			$table->integer('order_index')->unsigned()->default(0)->comment('排序');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_spec_item');
	}

}
