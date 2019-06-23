<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpWcCommentsSubscriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_wc_comments_subscription', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('email');
			$table->integer('subscribtion_id')->index('subscribtion_id');
			$table->integer('post_id')->index('post_id');
			$table->string('subscribtion_type');
			$table->string('activation_key');
			$table->boolean('confirm')->nullable()->default(0)->index('confirm');
			$table->timestamp('subscription_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->unique(['subscribtion_id','email','post_id'], 'subscribe_unique_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_wc_comments_subscription');
	}

}
