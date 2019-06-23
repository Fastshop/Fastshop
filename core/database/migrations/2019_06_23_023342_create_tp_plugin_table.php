<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpPluginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_plugin', function(Blueprint $table)
		{
			$table->string('code', 13)->nullable()->comment('插件编码');
			$table->string('name', 55)->nullable()->comment('中文名字');
			$table->string('version')->nullable()->comment('插件的版本');
			$table->string('author', 30)->nullable()->comment('插件作者');
			$table->text('config', 65535)->nullable()->comment('配置信息');
			$table->text('config_value', 65535)->nullable()->comment('配置值信息');
			$table->string('desc')->nullable()->comment('插件描述');
			$table->boolean('status')->nullable()->default(0)->comment('是否启用');
			$table->string('type', 50)->nullable()->comment('插件类型 payment支付 login 登陆 shipping物流');
			$table->string('icon')->nullable()->comment('图标');
			$table->text('bank_code', 65535)->nullable()->comment('网银配置信息');
			$table->boolean('scene')->nullable()->default(0)->comment('使用场景 0PC+手机 1手机 2PC 3APP 4小程序');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_plugin');
	}

}
