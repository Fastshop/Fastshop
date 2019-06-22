<?php
namespace model\tp\article;
use App\Models\BaseModel;

/**
 * model\tp\article\tp_article_cat2
 *
 * @method \think\db\Query tp()
 * @property int $cat_id 表id
 * @property string|null $cat_name 类别名称
 * @property int|null $cat_type 系统分组
 * @property int|null $parent_id 夫级ID
 * @property int|null $show_in_nav 是否导航显示
 * @property int|null $sort_order 排序
 * @property string|null $cat_desc 分类描述
 * @property string|null $keywords 搜索关键词
 * @property string|null $cat_alias 别名
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereCatAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereCatDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereCatName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereCatType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereShowInNav($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_cat2 whereSortOrder($value)
 * @mixin \Eloquent
 */
class tp_article_cat2 extends BaseModel
{
    protected $table = 'tp_article_cat2';
    protected $primaryKey = 'cat_id';
}