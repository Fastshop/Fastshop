<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpWxUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_wx_user', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('表id');
			$table->integer('uid')->index('uid')->comment('uid');
			$table->string('wxname', 60)->default('')->comment('公众号名称');
			$table->string('aeskey', 256)->default('')->comment('aeskey');
			$table->boolean('encode')->default(0)->comment('encode');
			$table->string('appid', 50)->default('')->comment('appid');
			$table->string('appsecret', 50)->default('')->comment('appsecret');
			$table->string('wxid', 64)->default('')->comment('公众号原始ID');
			$table->char('weixin', 64)->comment('微信号');
			$table->char('headerpic')->comment('头像地址');
			$table->char('token')->comment('token');
			$table->string('w_token', 150)->default('')->comment('微信对接token');
			$table->integer('create_time')->comment('create_time');
			$table->integer('updatetime')->comment('updatetime');
			$table->string('tplcontentid', 2)->default('')->comment('内容模版ID');
			$table->string('share_ticket', 150)->default('')->comment('分享ticket');
			$table->char('share_dated', 15)->comment('share_dated');
			$table->string('authorizer_access_token', 200)->default('')->comment('authorizer_access_token');
			$table->string('authorizer_refresh_token', 200)->default('')->comment('authorizer_refresh_token');
			$table->char('authorizer_expires', 10)->comment('authorizer_expires');
			$table->boolean('type')->default(0)->comment('类型');
			$table->string('web_access_token', 200)->nullable()->default('')->comment(' 网页授权token');
			$table->string('web_refresh_token', 200)->nullable()->default('')->comment('web_refresh_token');
			$table->integer('web_expires')->comment('过期时间');
			$table->string('qr', 200)->default('')->comment('qr');
			$table->text('menu_config', 65535)->nullable()->comment('菜单');
			$table->boolean('wait_access')->nullable()->default(0)->comment('微信接入状态,0待接入1已接入');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_wx_user');
	}

}
