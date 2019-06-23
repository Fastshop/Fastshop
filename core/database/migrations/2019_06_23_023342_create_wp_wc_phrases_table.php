<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpWcPhrasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_wc_phrases', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('phrase_key')->index('phrase_key');
			$table->text('phrase_value', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_wc_phrases');
	}

}
