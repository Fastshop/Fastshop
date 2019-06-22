<?php
namespace model\tp\combination;
use App\Models\BaseModel;

/**
 * model\tp\combination\tp_combination_goods
 *
 * @method \app\common\model\CombinationGoods tp()
 * @property int $combination_id
 * @property string $goods_name 商品名称
 * @property string $key_name 规格名称
 * @property int $goods_id
 * @property int $item_id
 * @property float $original_price 原价/商城价
 * @property float $price 优惠价格
 * @property int $is_master 1主0从
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereCombinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereIsMaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereKeyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods whereOriginalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination_goods wherePrice($value)
 * @mixin \Eloquent
 */
class tp_combination_goods extends BaseModel
{
    protected $table = 'tp_combination_goods';
    protected $primaryKey = '';
}