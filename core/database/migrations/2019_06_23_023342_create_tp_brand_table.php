<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpBrandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_brand', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned()->comment('品牌表');
			$table->string('name', 60)->default('')->comment('品牌名称');
			$table->string('logo', 80)->default('')->comment('品牌logo');
			$table->text('desc', 65535)->comment('品牌描述');
			$table->string('url')->default('')->comment('品牌地址');
			$table->integer('sort')->unsigned()->default(50)->comment('排序');
			$table->string('cat_name', 128)->nullable()->default('')->comment('品牌分类');
			$table->integer('parent_cat_id')->nullable()->default(0)->comment('分类id');
			$table->integer('cat_id')->nullable()->default(0)->comment('分类id');
			$table->boolean('is_hot')->nullable()->default(0)->comment('是否推荐');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_brand');
	}

}
