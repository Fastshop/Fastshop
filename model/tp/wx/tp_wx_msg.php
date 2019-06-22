<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_msg
 *
 * @method \think\db\Query tp()
 * @property int $msgid
 * @property int $admin_id 系统用户ID
 * @property string $titile
 * @property string $content
 * @property int $createtime 创建时间
 * @property int $sendtime 发送时间
 * @property int|null $issend 0未发送1成功2失败
 * @property int|null $sendtype 0单人1所有
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereCreatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereIssend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereMsgid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereSendtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereSendtype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_msg whereTitile($value)
 * @mixin \Eloquent
 */
class tp_wx_msg extends BaseModel
{
    protected $table = 'tp_wx_msg';
    protected $primaryKey = 'msgid';
}