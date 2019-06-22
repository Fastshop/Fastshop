<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_type
 *
 * @method \app\common\model\GoodsType tp()
 * @property int $id id自增
 * @property string $name 类型名称
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_type query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_type whereName($value)
 * @mixin \Eloquent
 */
class tp_goods_type extends BaseModel
{
    protected $table = 'tp_goods_type';
    protected $primaryKey = 'id';
}