<?php
namespace model\tp\article;
use App\Models\BaseModel;

/**
 * model\tp\article\tp_article_cat
 *
 * @method \think\db\Query tp()
 * @property int $cat_id
 * @property string|null $cat_name 类别名称
 * @property int|null $cat_type 默认分组
 * @property int|null $parent_id 夫级ID
 * @property int|null $show_in_nav 是否导航显示
 * @property int|null $sort_order 排序
 * @property string|null $cat_desc 分类描述
 * @property string|null $keywords 搜索关键词
 * @property string|null $cat_alias 别名
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereCatAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereCatDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereCatName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereCatType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereShowInNav($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat whereSortOrder($value)
 * @mixin \Eloquent
 */
class tp_article_cat extends BaseModel
{
    protected $table = 'tp_article_cat';
    protected $primaryKey = 'cat_id';
}