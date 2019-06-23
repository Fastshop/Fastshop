<?php
namespace model\tp\article;
use App\Models\BaseModel;

/**
 * model\tp\article\tp_article
 *
 * @method \think\db\Query tp()
 * @property int $article_id
 * @property int $cat_id 类别ID
 * @property string $title 文章标题
 * @property string $content
 * @property string $author 文章作者
 * @property string $author_email 作者邮箱
 * @property string $keywords 关键字
 * @property int $article_type
 * @property int $is_open 是否显示,1:显示;0:不显示
 * @property int $add_time
 * @property string $file_url 附件地址
 * @property int $open_type
 * @property string $link 链接地址
 * @property string|null $description 文章摘要
 * @property int|null $click 浏览量
 * @property int|null $publish_time 文章预告发布时间
 * @property string|null $thumb 文章缩略图
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereAuthorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereOpenType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article wherePublishTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article whereTitle($value)
 * @mixin \Eloquent
 */
class tp_article extends BaseModel
{
    protected $table = 'tp_article';
    protected $primaryKey = 'article_id';
}