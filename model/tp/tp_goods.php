<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_goods
 *
 * @method \app\common\model\Goods tp()
 * @property int $goods_id 商品id
 * @property int $cat_id 分类id
 * @property int|null $extend_cat_id 扩展分类id
 * @property string $goods_sn 商品编号
 * @property string $goods_name 商品名称
 * @property int $click_count 点击数
 * @property int $brand_id 品牌id
 * @property int $store_count 库存数量
 * @property int|null $comment_count 商品评论数
 * @property int $weight 商品重量克为单位
 * @property float $volume 商品体积。单位立方米
 * @property float $market_price 市场价
 * @property float $shop_price 本店价
 * @property float|null $cost_price 商品成本价
 * @property string|null $price_ladder 价格阶梯
 * @property string $keywords 商品关键词
 * @property string $goods_remark 商品简单描述
 * @property string|null $goods_content 商品详细描述
 * @property string|null $mobile_content 手机端商品详情
 * @property string $original_img 商品上传原始图
 * @property int $is_virtual 是否为虚拟商品 1是，0否
 * @property int|null $virtual_indate 虚拟商品有效期
 * @property int|null $virtual_limit 虚拟商品购买上限
 * @property int|null $virtual_refund 是否允许过期退款， 1是，0否
 * @property int $virtual_sales_sum 虚拟销售量
 * @property int $virtual_collect_sum 虚拟收藏量
 * @property int $collect_sum 收藏量
 * @property int $is_on_sale 是否上架
 * @property int $is_free_shipping 是否包邮0否1是
 * @property int $sort 商品排序
 * @property int $is_recommend 是否推荐
 * @property int $is_new 是否新品
 * @property int|null $is_hot 是否热卖
 * @property int $last_update 最后更新时间
 * @property int $goods_type 商品所属类型id，取值表goods_type的cat_id
 * @property int $give_integral 购买商品赠送积分
 * @property int $exchange_integral 积分兑换：0不参与积分兑换，积分和现金的兑换比例见后台配置
 * @property int $suppliers_id 供货商ID
 * @property int|null $sales_sum 商品销量
 * @property int|null $prom_type 0默认1抢购2团购3优惠促销4预售5虚拟(5其实没用)6拼团7搭配购
 * @property int $prom_id 优惠活动id
 * @property float|null $commission 佣金用于分销分成
 * @property string|null $spu SPU
 * @property string|null $sku SKU
 * @property int|null $template_id 运费模板ID
 * @property string|null $video 视频
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereClickCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereCollectSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereCommentCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereExchangeIntegral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereExtendCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGiveIntegral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGoodsContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGoodsRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGoodsSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereGoodsType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereIsFreeShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereIsHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereIsOnSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereIsRecommend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereIsVirtual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereMarketPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereMobileContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereOriginalImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods wherePriceLadder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods wherePromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereSalesSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereShopPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereSpu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereStoreCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereSuppliersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVirtualCollectSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVirtualIndate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVirtualLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVirtualRefund($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVirtualSalesSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_goods whereWeight($value)
 * @mixin \Eloquent
 */
class tp_goods extends BaseModel
{
    protected $table = 'tp_goods';
    protected $primaryKey = 'goods_id';
}