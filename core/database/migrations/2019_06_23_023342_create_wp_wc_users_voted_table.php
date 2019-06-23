<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpWcUsersVotedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_wc_users_voted', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('user_id')->index('user_id');
			$table->integer('comment_id')->index('comment_id');
			$table->integer('vote_type')->nullable()->index('vote_type');
			$table->boolean('is_guest')->nullable()->default(0)->index('is_guest');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_wc_users_voted');
	}

}
