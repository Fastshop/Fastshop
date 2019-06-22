<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_attr
 *
 * @method \app\common\model\GoodsAttr tp()
 * @property int $goods_attr_id 商品属性id自增
 * @property int $goods_id 商品id
 * @property int $attr_id 属性id
 * @property string $attr_value 属性值
 * @property string $attr_price 属性价格
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr whereAttrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr whereAttrPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr whereAttrValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr whereGoodsAttrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attr whereGoodsId($value)
 * @mixin \Eloquent
 */
class tp_goods_attr extends BaseModel
{
    protected $table = 'tp_goods_attr';
    protected $primaryKey = 'goods_attr_id';
}