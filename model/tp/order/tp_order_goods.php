<?php
namespace model\tp\order;
use App\Models\BaseModel;

/**
 * model\tp\order\tp_order_goods
 *
 * @method \app\common\model\OrderGoods tp()
 * @property int $rec_id 表id自增
 * @property int $order_id 订单id
 * @property int $goods_id 商品id
 * @property string $goods_name 商品名称
 * @property string $goods_sn 商品货号
 * @property int $goods_num 购买数量
 * @property float $final_price 商品实际购买价
 * @property float $goods_price 本店价
 * @property float|null $cost_price 商品成本价
 * @property float|null $member_goods_price 会员折扣价
 * @property int|null $give_integral 购买商品赠送积分
 * @property int $item_id 商品规格id
 * @property string|null $spec_key 商品规格key
 * @property string|null $spec_key_name 规格对应的中文名字
 * @property string $bar_code 条码
 * @property int|null $is_comment 是否评价
 * @property int $prom_type 0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠,4预售
 * @property int|null $prom_id 活动id
 * @property int|null $is_send 0未发货，1已发货，2已换货，3已退货
 * @property int|null $delivery_id 发货单ID
 * @property string|null $sku sku
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereBarCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereFinalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereGiveIntegral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereGoodsSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereIsComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereIsSend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereMemberGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods wherePromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereRecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereSpecKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_goods whereSpecKeyName($value)
 * @mixin \Eloquent
 */
class tp_order_goods extends BaseModel
{
    protected $table = 'tp_order_goods';
    protected $primaryKey = 'rec_id';
}