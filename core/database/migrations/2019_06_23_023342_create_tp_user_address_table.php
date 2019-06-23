<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUserAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_user_address', function(Blueprint $table)
		{
			$table->increments('address_id')->comment('表id');
			$table->integer('user_id')->unsigned()->default(0)->index('user_id')->comment('用户id');
			$table->string('consignee', 60)->default('')->comment('收货人');
			$table->string('email', 60)->default('')->comment('邮箱地址');
			$table->integer('country')->default(0)->comment('国家');
			$table->integer('province')->default(0)->comment('省份');
			$table->integer('city')->default(0)->comment('城市');
			$table->integer('district')->default(0)->comment('地区');
			$table->integer('twon')->nullable()->default(0)->comment('乡镇');
			$table->string('address', 120)->default('')->comment('地址');
			$table->string('zipcode', 60)->default('')->comment('邮政编码');
			$table->string('mobile', 60)->default('')->comment('手机');
			$table->boolean('is_default')->nullable()->default(0)->comment('默认收货地址');
			$table->decimal('longitude', 10, 7)->default(0.0000000)->comment('地址经度');
			$table->decimal('latitude', 10, 7)->default(0.0000000)->comment('地址纬度');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_user_address');
	}

}
