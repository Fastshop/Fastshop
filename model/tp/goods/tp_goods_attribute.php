<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_attribute
 *
 * @method \app\common\model\GoodsAttribute tp()
 * @property int $attr_id 属性id
 * @property string $attr_name 属性名称
 * @property int $type_id 属性分类id
 * @property int $attr_index 是否显示0不显示1显示
 * @property string $attr_values 可选值列表
 * @property int $order 属性排序
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute whereAttrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute whereAttrIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute whereAttrName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute whereAttrValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_attribute whereTypeId($value)
 * @mixin \Eloquent
 */
class tp_goods_attribute extends BaseModel
{
    protected $table = 'tp_goods_attribute';
    protected $primaryKey = 'attr_id';
}