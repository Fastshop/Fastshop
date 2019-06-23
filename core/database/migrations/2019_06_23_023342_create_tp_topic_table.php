<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_topic', function(Blueprint $table)
		{
			$table->increments('topic_id')->comment('表id');
			$table->string('topic_title', 100)->nullable()->comment('专题标题');
			$table->string('topic_image', 100)->nullable()->comment('专题封面');
			$table->string('topic_background_color', 20)->nullable()->comment('专题背景颜色');
			$table->string('topic_background', 100)->nullable()->comment('专题背景图');
			$table->text('topic_content', 65535)->nullable()->comment('专题详情');
			$table->string('topic_repeat', 20)->nullable()->default('')->comment('背景重复方式');
			$table->boolean('topic_state')->nullable()->default(1)->comment('专题状态1-草稿、2-已发布');
			$table->boolean('topic_margin_top')->nullable()->default(0)->comment('正文距顶部距离');
			$table->integer('ctime')->nullable()->comment('专题创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_topic');
	}

}
