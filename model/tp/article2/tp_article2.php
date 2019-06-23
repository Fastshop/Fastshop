<?php
namespace model\tp\article2;
use App\Models\BaseModel;

/**
 * model\tp\article2\tp_article2
 *
 * @method \think\db\Query tp()
 * @property int $article_id 表id
 * @property int $cat_id 类别ID
 * @property string $title 文章标题
 * @property string $content 文章内容
 * @property string $author 文章作者
 * @property string $author_email 作者邮箱
 * @property string $keywords 关键字
 * @property int $article_type 文章类型
 * @property int $is_open 是否开启
 * @property int $add_time 添加时间
 * @property string $file_url 附件地址
 * @property int $open_type open_type
 * @property string $link 链接地址
 * @property string|null $description 文章摘要
 * @property int|null $click 浏览量
 * @property int|null $publish_time 文章发布时间
 * @property string|null $thumb 文章缩略图
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereAuthorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereOpenType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 wherePublishTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article2\tp_article2 whereTitle($value)
 * @mixin \Eloquent
 */
class tp_article2 extends BaseModel
{
    protected $table = 'tp_article2';
    protected $primaryKey = 'article_id';
}