<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_cart
 *
 * @method \app\common\model\Cart tp()
 * @property int $id 购物车表
 * @property int $user_id 用户id
 * @property string $session_id session
 * @property int $goods_id 商品id
 * @property string $goods_sn 商品货号
 * @property string $goods_name 商品名称
 * @property float $market_price 市场价
 * @property float $goods_price 本店价
 * @property float|null $member_goods_price 会员折扣价
 * @property int|null $goods_num 购买数量
 * @property int|null $item_id 规格ID
 * @property string|null $spec_key 商品规格key 对应tp_spec_goods_price 表
 * @property string|null $spec_key_name 商品规格组合名称
 * @property string|null $bar_code 商品条码
 * @property int|null $selected 购物车选中状态
 * @property int|null $add_time 加入购物车的时间
 * @property int|null $prom_type 0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠,7 搭配购
 * @property int|null $prom_id 活动id
 * @property string|null $sku sku
 * @property int $combination_group_id  搭配购的组id/cart_id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereBarCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereCombinationGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereGoodsSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereMarketPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereMemberGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart wherePromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereSelected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereSpecKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereSpecKeyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_cart whereUserId($value)
 * @mixin \Eloquent
 */
class tp_cart extends BaseModel
{
    protected $table = 'tp_cart';
    protected $primaryKey = 'id';
}