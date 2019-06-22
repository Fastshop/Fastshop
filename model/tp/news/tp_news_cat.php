<?php
namespace model\tp\news;
use App\Models\BaseModel;

/**
 * model\tp\news\tp_news_cat
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
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereCatAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereCatDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereCatName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereCatType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereShowInNav($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\news\tp_news_cat whereSortOrder($value)
 * @mixin \Eloquent
 */
class tp_news_cat extends BaseModel
{
    protected $table = 'tp_news_cat';
    protected $primaryKey = 'cat_id';
}