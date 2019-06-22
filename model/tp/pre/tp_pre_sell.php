<?php
namespace model\tp\pre;
use App\Models\BaseModel;

/**
 * model\tp\pre\tp_pre_sell
 *
 * @method \app\common\model\PreSell tp()
 * @property int $pre_sell_id 预售id
 * @property int $goods_id 商品id
 * @property string $goods_name 商品名称
 * @property int $item_id 规格id
 * @property string $item_name 规格名称
 * @property string $title 预售标题
 * @property string $desc 预售描述
 * @property int $deposit_goods_num 订购商品数
 * @property int $deposit_order_num 订购订单数
 * @property int $stock_num 预售库存
 * @property int $sell_start_time 活动开始时间
 * @property int $sell_end_time 活动结束时间
 * @property int $pay_start_time 尾款支付开始时间
 * @property int $pay_end_time 尾款支付结束时间
 * @property float $deposit_price 订金
 * @property string $price_ladder 价格阶梯。预定人数达到多少个时，价格为多少钱
 * @property string $delivery_time_desc 开始发货时间描述
 * @property int $is_finished 是否已结束:0,正常；1，结束（待处理）；2,成功结束；3，失败结束。
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereDeliveryTimeDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereDepositGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereDepositOrderNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereDepositPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereIsFinished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell wherePayEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell wherePayStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell wherePreSellId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell wherePriceLadder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereSellEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereSellStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereStockNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pre\tp_pre_sell whereTitle($value)
 * @mixin \Eloquent
 */
class tp_pre_sell extends BaseModel
{
    protected $table = 'tp_pre_sell';
    protected $primaryKey = 'pre_sell_id';
}