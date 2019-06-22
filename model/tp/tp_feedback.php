<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_feedback
 *
 * @method \think\db\Query tp()
 * @property int $msg_id 默认自增ID
 * @property int $parent_id 回复留言ID
 * @property int $user_id 用户ID
 * @property string $user_name
 * @property string $msg_title 留言标题
 * @property int $msg_type 留言类型
 * @property int $msg_status 处理状态
 * @property string $msg_content 留言内容
 * @property int $msg_time 留言时间
 * @property string $message_img
 * @property int $order_id
 * @property int $msg_area
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMessageImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereMsgType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_feedback whereUserName($value)
 * @mixin \Eloquent
 */
class tp_feedback extends BaseModel
{
    protected $table = 'tp_feedback';
    protected $primaryKey = 'msg_id';
}