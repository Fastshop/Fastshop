<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpSpecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_spec', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('规格表');
			$table->integer('type_id')->nullable()->default(0)->comment('规格类型');
			$table->string('name', 55)->nullable()->comment('规格名称');
			$table->integer('order')->nullable()->default(50)->comment('排序');
			$table->boolean('is_upload_image')->default(0)->comment('是否可上传规格图.0不可，1可以');
			$table->boolean('search_index')->nullable()->default(1)->comment('是否需要检索：1是，0否');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_spec');
	}

}
