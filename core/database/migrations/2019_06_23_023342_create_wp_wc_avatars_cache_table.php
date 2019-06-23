<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpWcAvatarsCacheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_wc_avatars_cache', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->default(0)->index('user_id');
			$table->string('user_email')->unique('user_email');
			$table->string('url')->index('url');
			$table->string('hash')->index('hash');
			$table->integer('maketime')->default(0)->index('maketime');
			$table->boolean('cached')->default(0)->index('cached');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_wc_avatars_cache');
	}

}
