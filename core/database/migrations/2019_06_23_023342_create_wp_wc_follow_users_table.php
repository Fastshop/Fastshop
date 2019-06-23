<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpWcFollowUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_wc_follow_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('post_id')->default(0)->index('post_id');
			$table->integer('user_id')->default(0)->index('user_id');
			$table->string('user_email', 125)->index('user_email');
			$table->string('user_name');
			$table->integer('follower_id')->default(0)->index('follower_id');
			$table->string('follower_email', 125)->index('follower_email');
			$table->string('follower_name');
			$table->string('activation_key', 32);
			$table->boolean('confirm')->default(0)->index('confirm');
			$table->integer('follow_timestamp')->index('follow_timestamp');
			$table->timestamp('follow_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->unique(['user_email','follower_email'], 'follow_unique_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_wc_follow_users');
	}

}
