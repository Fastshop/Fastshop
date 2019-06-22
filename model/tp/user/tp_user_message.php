<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_message
 *
 * @method \app\common\model\UserMessage tp()
 * @property int $rec_id
 * @property int $user_id 用户id
 * @property int $message_id 消息id
 * @property int $category 通知消息：0, 活动消息：1, 物流:2, 私信:3
 * @property int $is_see 是否查看：0未查看, 1已查看
 * @property int $deleted 用户假删除标识,1:删除,0未删除
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message whereIsSee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message whereRecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_message whereUserId($value)
 * @mixin \Eloquent
 */
class tp_user_message extends BaseModel
{
    protected $table = 'tp_user_message';
    protected $primaryKey = 'rec_id';
}