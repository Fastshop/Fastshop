<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_shop', function(Blueprint $table)
		{
			$table->integer('shop_id', true)->comment('门店索引id');
			$table->string('shop_name', 50)->default('')->index('store_name')->comment('门店名称');
			$table->integer('user_id')->default(0)->comment('会员id');
			$table->string('user_name', 50)->default('')->comment('会员名称');
			$table->string('shopper_name', 50)->default('')->comment('店主卖家用户名');
			$table->integer('province_id')->unsigned()->default(0)->comment('门店所在省份ID');
			$table->integer('city_id')->default(0)->comment('门店所在城市ID');
			$table->integer('district_id')->unsigned()->default(0)->comment('门店所在地区ID');
			$table->string('shop_address', 100)->default('')->comment('详细地区');
			$table->decimal('longitude', 10, 7)->default(0.0000000)->comment('门店地址经度');
			$table->decimal('latitude', 10, 7)->default(0.0000000)->comment('门店地址纬度');
			$table->string('shop_zip', 10)->default('')->comment('邮政编码');
			$table->integer('suppliers_id')->unsigned()->default(0)->comment('供应商id，0表示没有');
			$table->boolean('shop_status')->default(1)->index('store_state')->comment('门店状态，0关闭，1开启');
			$table->string('work_start_time', 10)->default('')->comment('每天营业起始时间');
			$table->string('work_end_time', 10)->default('')->comment('每天营业截止时间');
			$table->integer('add_time')->unsigned()->default(0)->comment('开店时间');
			$table->string('shop_phone_code', 20)->default('')->comment('联系电话区号');
			$table->string('shop_phone', 20)->default('')->comment('商家电话');
			$table->boolean('monday')->default(0)->comment('星期一是否营业,0不是,1是');
			$table->boolean('tuesday')->default(0)->comment('星期二是否营业，0不是1是');
			$table->boolean('wednesday')->default(0)->comment('星期三是否营业，0不是1是');
			$table->boolean('thursday')->default(0)->comment('星期四是否营业，0不是1是');
			$table->boolean('friday')->default(0)->comment('星期五是否营业，0不是1是');
			$table->boolean('saturday')->default(0)->comment('星期六是否营业，0不是1是');
			$table->boolean('sunday')->default(0)->comment('星期日是否营业，0不是1是');
			$table->boolean('deleted')->default(0)->comment('未删除0，已删除1');
			$table->string('shop_desc')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_shop');
	}

}
