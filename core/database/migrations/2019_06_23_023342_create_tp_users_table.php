<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_users', function(Blueprint $table)
		{
			$table->increments('user_id')->comment('表id');
			$table->string('email', 60)->default('')->index('email')->comment('邮件');
			$table->string('password', 32)->default('')->comment('密码');
			$table->string('paypwd', 32)->nullable()->comment('支付密码');
			$table->boolean('sex')->default(0)->comment('0 保密 1 男 2 女');
			$table->integer('birthday')->default(0)->comment('生日');
			$table->decimal('user_money', 10)->default(0.00)->comment('用户金额');
			$table->decimal('frozen_money', 10)->nullable()->default(0.00)->comment('冻结金额');
			$table->decimal('distribut_money', 10)->nullable()->default(0.00)->comment('累积分佣金额');
			$table->integer('underling_number')->nullable()->default(0)->index('underling_number')->comment('用户下线总数');
			$table->integer('pay_points')->unsigned()->default(0)->comment('消费积分');
			$table->integer('address_id')->unsigned()->default(0)->comment('默认收货地址');
			$table->integer('reg_time')->unsigned()->default(0)->comment('注册时间');
			$table->integer('last_login')->unsigned()->default(0)->comment('最后登录时间');
			$table->string('last_ip', 15)->default('')->comment('最后登录ip');
			$table->string('qq', 20)->default('')->comment('QQ');
			$table->string('mobile', 20)->default('')->comment('手机号码');
			$table->boolean('mobile_validated')->default(0)->index('mobile')->comment('是否验证手机');
			$table->string('oauth', 10)->nullable()->default('')->comment('第三方来源 wx weibo alipay');
			$table->string('openid', 100)->nullable()->index('openid')->comment('第三方唯一标示');
			$table->string('unionid', 100)->nullable()->index('unionid');
			$table->string('head_pic')->nullable()->comment('头像');
			$table->integer('province')->nullable()->default(0)->comment('省份');
			$table->integer('city')->nullable()->default(0)->comment('市区');
			$table->integer('district')->nullable()->default(0)->comment('县');
			$table->boolean('email_validated')->default(0)->comment('是否验证电子邮箱');
			$table->string('nickname', 50)->nullable()->comment('第三方返回昵称');
			$table->boolean('level')->nullable()->default(1)->comment('会员等级');
			$table->decimal('discount', 10)->nullable()->default(1.00)->comment('会员折扣，默认1不享受');
			$table->decimal('total_amount', 10)->nullable()->default(0.00)->comment('消费累计额度');
			$table->boolean('is_lock')->nullable()->default(0)->comment('是否被锁定冻结');
			$table->boolean('is_distribut')->nullable()->default(0)->comment('是否为分销商 0 否 1 是');
			$table->integer('first_leader')->nullable()->default(0)->comment('第一个上级');
			$table->integer('second_leader')->nullable()->default(0)->comment('第二个上级');
			$table->integer('third_leader')->nullable()->default(0)->comment('第三个上级');
			$table->string('token', 64)->nullable()->default('')->comment('用于app 授权类似于session_id');
			$table->boolean('message_mask')->default(63)->comment('消息掩码');
			$table->string('push_id', 30)->default('')->comment('推送id');
			$table->boolean('distribut_level')->nullable()->default(0)->comment('分销商等级');
			$table->boolean('is_vip')->nullable()->default(0)->comment('是否为VIP ：0不是，1是');
			$table->string('xcx_qrcode')->nullable()->comment('小程序专属二维码');
			$table->string('poster')->nullable()->comment('专属推广海报');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_users');
	}

}
