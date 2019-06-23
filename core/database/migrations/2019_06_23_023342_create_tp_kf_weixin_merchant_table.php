<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpKfWeixinMerchantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_kf_weixin_merchant', function(Blueprint $table)
		{
			$table->increments('id')->comment('联关v1_store表主键');
			$table->integer('storeid')->nullable();
			$table->boolean('wx_type')->nullable()->default(0)->comment('众公号类型');
			$table->string('wx_url', 100)->nullable();
			$table->string('wx_token', 50)->nullable();
			$table->string('wx_EncodingAESKey', 50)->nullable()->comment('消息加密密钥');
			$table->string('wx_raw_id', 30)->nullable()->comment('微信原始ID');
			$table->string('wx_AppId', 20)->nullable();
			$table->string('wx_AppSecret', 50)->nullable();
			$table->boolean('wx_Random')->nullable()->default(0)->comment('是否随机回复');
			$table->text('wx_Subscribe', 65535)->nullable()->comment('关注后的回复');
			$table->text('wx_NoneReply', 65535)->nullable()->comment('无匹配时的回复');
			$table->string('media_id')->nullable()->comment('关注回复');
			$table->string('media_id2')->nullable()->comment('无匹配回复');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_kf_weixin_merchant');
	}

}
