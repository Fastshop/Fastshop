<?php
namespace model\tp\message;
use App\Models\BaseModel;

/**
 * model\tp\message\tp_message_private
 *
 * @method \app\common\model\MessagePrivate tp()
 * @property int $message_id
 * @property string $message_content 消息内容
 * @property int $send_time 发送时间
 * @property int $send_user_id 发送者
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private whereMessageContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_private whereSendUserId($value)
 * @mixin \Eloquent
 */
class tp_message_private extends BaseModel
{
    protected $table = 'tp_message_private';
    protected $primaryKey = 'message_id';
}