<?php
namespace model\tp\message;
use App\Models\BaseModel;

/**
 * model\tp\message\tp_message_notice
 *
 * @method \app\common\model\MessageNotice tp()
 * @property int $message_id
 * @property int $message_type 个体消息：0，全体消息:1
 * @property string|null $message_title 消息标题
 * @property string $message_content 消息内容
 * @property int $send_time 发送时间
 * @property string|null $mmt_code 用户消息模板编号
 * @property int|null $type 0系统公告1降价通知2优惠券到账提醒3优惠券使用提醒4优惠券即将过期提醒5预售订单尾款支付提醒6提现到账提醒
 * @property int $prom_id 活动id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereMessageContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereMessageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereMessageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereMmtCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_notice whereType($value)
 * @mixin \Eloquent
 */
class tp_message_notice extends BaseModel
{
    protected $table = 'tp_message_notice';
    protected $primaryKey = 'message_id';
}