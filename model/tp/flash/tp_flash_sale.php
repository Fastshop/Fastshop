<?php
namespace model\tp\flash;
use App\Models\BaseModel;

/**
 * model\tp\flash\tp_flash_sale
 *
 * @method \app\common\model\FlashSale tp()
 * @property int $id
 * @property string $title 活动标题
 * @property int $goods_id 参团商品ID
 * @property int|null $item_id 对应spec_goods_price商品规格id
 * @property float $price 活动价格
 * @property int|null $goods_num 商品参加活动数
 * @property int $buy_limit 每人限购数
 * @property int $buy_num 已购买人数
 * @property int|null $order_num 已下单数
 * @property string|null $description 活动描述
 * @property int $start_time 开始时间
 * @property int $end_time 结束时间
 * @property int|null $is_end 是否已结束
 * @property string|null $goods_name 商品名称
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereBuyLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereBuyNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereIsEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereOrderNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\flash\tp_flash_sale whereTitle($value)
 * @mixin \Eloquent
 */
class tp_flash_sale extends BaseModel
{
    protected $table = 'tp_flash_sale';
    protected $primaryKey = 'id';
}