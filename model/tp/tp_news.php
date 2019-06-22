<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_news
 *
 * @method \app\common\model\News tp()
 * @property int $article_id
 * @property int $cat_id 类别ID
 * @property string $title 文章标题
 * @property string|null $tags 新闻标签
 * @property string $content
 * @property string $author 文章作者
 * @property string $author_email 作者邮箱
 * @property string $keywords 关键字
 * @property int $article_type
 * @property int $is_open
 * @property int $add_time
 * @property string $file_url 附件地址
 * @property int $open_type
 * @property string $link 链接地址
 * @property string|null $description 文章摘要
 * @property int|null $click 浏览量
 * @property int|null $publish_time 文章预告发布时间
 * @property string|null $thumb 文章缩略图
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereAuthorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereOpenType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news wherePublishTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_news whereTitle($value)
 * @mixin \Eloquent
 */
class tp_news extends BaseModel
{
    protected $table = 'tp_news';
    protected $primaryKey = 'article_id';
}