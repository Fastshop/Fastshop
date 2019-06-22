<?php
namespace model\tp\article;
use App\Models\BaseModel;

/**
 * model\tp\article\tp_article_bak
 *
 * @method \think\db\Query tp()
 * @property int $article_id 表id
 * @property int $cat_id 类别ID
 * @property int|null $cat_id2 扩展类别ID
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
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereAuthorEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereCatId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereOpenType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak wherePublishTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\article\tp_article_bak whereTitle($value)
 * @mixin \Eloquent
 */
class tp_article_bak extends BaseModel
{
    protected $table = 'tp_article_bak';
    protected $primaryKey = 'article_id';
}