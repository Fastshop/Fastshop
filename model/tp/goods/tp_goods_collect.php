<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_collect
 *
 * @method \app\common\model\GoodsCollect tp()
 * @property int $collect_id 表id
 * @property int $user_id 用户id
 * @property int $goods_id 商品id
 * @property int $add_time 添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect whereCollectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_collect whereUserId($value)
 * @mixin \Eloquent
 */
class tp_goods_collect extends BaseModel
{
    protected $table = 'tp_goods_collect';
    protected $primaryKey = 'collect_id';
}