<?php
namespace model\tp\spec\goods;
use App\Models\BaseModel;

/**
 * model\tp\spec\goods\tp_spec_goods_price
 *
 * @method \app\common\model\SpecGoodsPrice tp()
 * @property int $item_id 规格商品id
 * @property int|null $goods_id 商品id
 * @property string|null $key 规格键名
 * @property string|null $key_name 规格键名中文
 * @property float|null $price 价格
 * @property float $cost_price 成本价
 * @property float $commission 佣金用于分销分成
 * @property int|null $store_count 库存数量
 * @property string|null $bar_code 商品条形码
 * @property string|null $sku SKU
 * @property string|null $spec_img 规格商品主图
 * @property int|null $prom_id 活动id
 * @property int|null $prom_type 参加活动类型
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereBarCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereKeyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price wherePromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereSpecImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\goods\tp_spec_goods_price whereStoreCount($value)
 * @mixin \Eloquent
 */
class tp_spec_goods_price extends BaseModel
{
    protected $table = 'tp_spec_goods_price';
    protected $primaryKey = 'item_id';
}