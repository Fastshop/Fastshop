<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_visit
 *
 * @method \app\common\model\GoodsVisit tp()
 * @property int $visit_id 自增ID
 * @property int $goods_id 商品ID
 * @property int $user_id 会员ID
 * @property int $visittime 浏览时间
 * @property int $cat_id 商品分类ID
 * @property int $extend_cat_id 商品扩展分类ID
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit whereExtendCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_visit whereVisittime($value)
 * @mixin \Eloquent
 */
class tp_goods_visit extends BaseModel
{
    protected $table = 'tp_goods_visit';
    protected $primaryKey = 'visit_id';
}