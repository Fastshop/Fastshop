<?php
namespace model\tp\group;
use App\Models\BaseModel;

/**
 * model\tp\group\tp_group_buy
 *
 * @method \app\common\model\GroupBuy tp()
 * @property int $id 团购ID
 * @property string $title 活动名称
 * @property int $start_time 开始时间
 * @property int $end_time 结束时间
 * @property int $goods_id 商品ID
 * @property int|null $item_id 对应spec_goods_price商品规格id
 * @property float $price 团购价格
 * @property int|null $goods_num 商品参团数
 * @property int $buy_num 商品已购买数
 * @property int $order_num 已下单人数
 * @property int $virtual_num 虚拟购买数
 * @property float $rebate 折扣
 * @property string|null $intro 本团介绍
 * @property float $goods_price 商品原价
 * @property string $goods_name 商品名称
 * @property int $recommended 是否推荐 0.未推荐 1.已推荐
 * @property int $views 查看次数
 * @property int|null $is_end 是否结束
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereBuyNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereIsEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereOrderNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereRebate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereRecommended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\group\tp_group_buy whereVirtualNum($value)
 * @mixin \Eloquent
 */
class tp_group_buy extends BaseModel
{
    protected $table = 'tp_group_buy';
    protected $primaryKey = 'id';
}