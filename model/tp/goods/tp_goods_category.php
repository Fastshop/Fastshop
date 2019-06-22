<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_category
 *
 * @method \app\common\model\GoodsCategory tp()
 * @property int $id 商品分类id
 * @property string $name 商品分类名称
 * @property string|null $mobile_name 手机端显示的商品分类名
 * @property int $parent_id 父id
 * @property string|null $parent_id_path 家族图谱
 * @property int|null $level 等级
 * @property int $sort_order 顺序排序
 * @property int $is_show 是否显示
 * @property string|null $image 分类图片
 * @property int|null $is_hot 是否推荐为热门分类
 * @property int|null $cat_group 分类分组默认0
 * @property int|null $commission_rate 分佣比例
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereCatGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereIsHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereMobileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereParentIdPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_category whereSortOrder($value)
 * @mixin \Eloquent
 */
class tp_goods_category extends BaseModel
{
    protected $table = 'tp_goods_category';
    protected $primaryKey = 'id';
}