<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_brand
 *
 * @method \app\common\model\Brand tp()
 * @property int $id 品牌表
 * @property string $name 品牌名称
 * @property string $logo 品牌logo
 * @property string $desc 品牌描述
 * @property string $url 品牌地址
 * @property int $sort 排序
 * @property string|null $cat_name 品牌分类
 * @property int|null $parent_cat_id 分类id
 * @property int|null $cat_id 分类id
 * @property int|null $is_hot 是否推荐
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereCatName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereIsHot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereParentCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_brand whereUrl($value)
 * @mixin \Eloquent
 */
class tp_brand extends BaseModel
{
    protected $table = 'tp_brand';
    protected $primaryKey = 'id';
}