<?php
namespace model\tp\message;
use App\Models\BaseModel;

/**
 * model\tp\message\tp_message
 *
 * @method \think\db\Query tp()
 * @property int $message_id
 * @property int $admin_id 管理者id
 * @property string $message 站内信内容
 * @property int $type 个体消息：0，全体消息1
 * @property int $category  系统消息：0，活动消息：1
 * @property int $send_time 发送时间
 * @property string|null $data 消息序列化内容
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message whereType($value)
 * @mixin \Eloquent
 */
class tp_message extends BaseModel
{
    protected $table = 'tp_message';
    protected $primaryKey = 'message_id';
}