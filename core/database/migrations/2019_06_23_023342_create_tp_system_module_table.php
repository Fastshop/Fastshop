<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSystemModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_system_module', function(Blueprint $table)
		{
			$table->smallInteger('mod_id', true)->unsigned();
			$table->enum('module', array('top','menu','module'))->nullable()->default('module');
			$table->boolean('level')->nullable()->default(3);
			$table->string('ctl', 20)->nullable()->default('');
			$table->string('act', 30)->nullable()->default('');
			$table->string('title', 20)->nullable()->default('');
			$table->boolean('visible')->nullable()->default(1);
			$table->smallInteger('parent_id')->nullable()->default(0);
			$table->smallInteger('orderby')->nullable()->default(50);
			$table->string('icon', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_system_module');
	}

}
