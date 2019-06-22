<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_topic
 *
 * @method \think\db\Query tp()
 * @property int $topic_id 表id
 * @property string|null $topic_title 专题标题
 * @property string|null $topic_image 专题封面
 * @property string|null $topic_background_color 专题背景颜色
 * @property string|null $topic_background 专题背景图
 * @property string|null $topic_content 专题详情
 * @property string|null $topic_repeat 背景重复方式
 * @property int|null $topic_state 专题状态1-草稿、2-已发布
 * @property int|null $topic_margin_top 正文距顶部距离
 * @property int|null $ctime 专题创建时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicBackgroundColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicMarginTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicRepeat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_topic whereTopicTitle($value)
 * @mixin \Eloquent
 */
class tp_topic extends BaseModel
{
    protected $table = 'tp_topic';
    protected $primaryKey = 'topic_id';
}