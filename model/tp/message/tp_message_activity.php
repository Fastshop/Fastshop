<?php
namespace model\tp\message;
use App\Models\BaseModel;

/**
 * model\tp\message\tp_message_activity
 *
 * @method \app\common\model\MessageActivity tp()
 * @property int $message_id
 * @property string $message_title 消息标题
 * @property string|null $message_content 消息内容
 * @property string|null $img_uri 图片地址
 * @property int $send_time 发送时间
 * @property int $end_time 活动结束时间
 * @property string $mmt_code 用户消息模板编号
 * @property int $prom_type 1抢购2团购3优惠促销4预售5虚拟6拼团7搭配购8自定义图文消息9订单促销
 * @property int $prom_id 活动id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereImgUri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereMessageContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereMessageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereMmtCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity wherePromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_activity whereSendTime($value)
 * @mixin \Eloquent
 */
class tp_message_activity extends BaseModel
{
    protected $table = 'tp_message_activity';
    protected $primaryKey = 'message_id';
}