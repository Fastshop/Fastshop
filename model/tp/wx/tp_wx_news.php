<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_news
 *
 * @method \app\common\model\WxNews tp()
 * @property int $id 图文子素材id
 * @property int|null $update_time 更新时间
 * @property string|null $title 标题
 * @property int|null $material_id 图片素材id，一个图片为素材可包括几个子图文
 * @property string|null $author 作者
 * @property string|null $content html内容
 * @property string|null $digest 摘要
 * @property string|null $thumb_url 封面链接
 * @property string|null $thumb_media_id 封面媒体id
 * @property string|null $content_source_url 原文链接
 * @property int|null $show_cover_pic 是否显示封面
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereContentSourceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereDigest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereShowCoverPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereThumbMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereThumbUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_news whereUpdateTime($value)
 * @mixin \Eloquent
 */
class tp_wx_news extends BaseModel
{
    protected $table = 'tp_wx_news';
    protected $primaryKey = 'id';
}