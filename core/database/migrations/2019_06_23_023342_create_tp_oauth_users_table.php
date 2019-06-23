<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpOauthUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_oauth_users', function(Blueprint $table)
		{
			$table->increments('tu_id')->comment('表自增ID');
			$table->integer('user_id')->comment('用户表ID');
			$table->string('openid')->comment('第三方开放平台openid');
			$table->string('oauth', 50)->comment('第三方授权平台');
			$table->string('unionid')->nullable()->comment('unionid');
			$table->string('oauth_child', 50)->nullable()->comment('mp标识来自公众号, open标识来自开放平台,用于标识来自哪个第三方授权平台, 因为同是微信平台有来自公众号和开放平台');
			$table->string('nick_name', 64)->nullable()->comment('绑定时的昵称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_oauth_users');
	}

}
