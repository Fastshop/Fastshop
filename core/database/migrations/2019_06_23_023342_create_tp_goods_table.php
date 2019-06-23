<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTpGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tp_goods', function(Blueprint $table)
		{
			$table->increments('goods_id')->comment('商品id');
			$table->integer('cat_id')->unsigned()->default(0)->index('cat_id')->comment('分类id');
			$table->integer('extend_cat_id')->nullable()->default(0)->comment('扩展分类id');
			$table->string('goods_sn', 60)->default('')->index('goods_sn')->comment('商品编号');
			$table->string('goods_name', 120)->default('')->comment('商品名称');
			$table->integer('click_count')->unsigned()->default(0)->comment('点击数');
			$table->smallInteger('brand_id')->unsigned()->default(0)->index('brand_id')->comment('品牌id');
			$table->smallInteger('store_count')->unsigned()->default(10)->index('goods_number')->comment('库存数量');
			$table->smallInteger('comment_count')->nullable()->default(0)->comment('商品评论数');
			$table->integer('weight')->unsigned()->default(0)->index('goods_weight')->comment('商品重量克为单位');
			$table->float('volume', 10, 4)->unsigned()->default(0.0000)->comment('商品体积。单位立方米');
			$table->decimal('market_price', 10)->unsigned()->default(0.00)->comment('市场价');
			$table->decimal('shop_price', 10)->unsigned()->default(0.00)->comment('本店价');
			$table->decimal('cost_price', 10)->nullable()->default(0.00)->comment('商品成本价');
			$table->text('price_ladder', 65535)->nullable()->comment('价格阶梯');
			$table->string('keywords')->default('')->comment('商品关键词');
			$table->string('goods_remark')->default('')->comment('商品简单描述');
			$table->text('goods_content', 65535)->nullable()->comment('商品详细描述');
			$table->text('mobile_content', 65535)->nullable()->comment('手机端商品详情');
			$table->string('original_img')->default('')->comment('商品上传原始图');
			$table->boolean('is_virtual')->default(0)->comment('是否为虚拟商品 1是，0否');
			$table->integer('virtual_indate')->nullable()->default(0)->comment('虚拟商品有效期');
			$table->smallInteger('virtual_limit')->nullable()->default(0)->comment('虚拟商品购买上限');
			$table->boolean('virtual_refund')->nullable()->default(1)->comment('是否允许过期退款， 1是，0否');
			$table->integer('virtual_sales_sum')->unsigned()->default(0)->comment('虚拟销售量');
			$table->integer('virtual_collect_sum')->unsigned()->default(0)->comment('虚拟收藏量');
			$table->integer('collect_sum')->unsigned()->default(0)->comment('收藏量');
			$table->boolean('is_on_sale')->default(1)->comment('是否上架');
			$table->boolean('is_free_shipping')->default(0)->comment('是否包邮0否1是');
			$table->smallInteger('sort')->unsigned()->default(50)->index('sort_order')->comment('商品排序');
			$table->boolean('is_recommend')->default(0)->comment('是否推荐');
			$table->boolean('is_new')->default(0)->comment('是否新品');
			$table->boolean('is_hot')->nullable()->default(0)->comment('是否热卖');
			$table->integer('last_update')->unsigned()->default(0)->index('last_update')->comment('最后更新时间');
			$table->smallInteger('goods_type')->unsigned()->default(0)->comment('商品所属类型id，取值表goods_type的cat_id');
			$table->integer('give_integral')->unsigned()->default(0)->comment('购买商品赠送积分');
			$table->integer('exchange_integral')->default(0)->comment('积分兑换：0不参与积分兑换，积分和现金的兑换比例见后台配置');
			$table->smallInteger('suppliers_id')->unsigned()->default(0)->comment('供货商ID');
			$table->integer('sales_sum')->nullable()->default(0)->comment('商品销量');
			$table->boolean('prom_type')->nullable()->default(0)->comment('0默认1抢购2团购3优惠促销4预售5虚拟(5其实没用)6拼团7搭配购');
			$table->integer('prom_id')->default(0)->comment('优惠活动id');
			$table->decimal('commission', 10)->nullable()->default(0.00)->comment('佣金用于分销分成');
			$table->string('spu', 128)->nullable()->default('')->comment('SPU');
			$table->string('sku', 128)->nullable()->default('')->comment('SKU');
			$table->integer('template_id')->unsigned()->nullable()->default(0)->comment('运费模板ID');
			$table->string('video')->nullable()->default('')->comment('视频');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tp_goods');
	}

}
