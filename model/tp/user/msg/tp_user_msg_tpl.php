<?php
namespace model\tp\user\msg;
use App\Models\BaseModel;

/**
 * model\tp\user\msg\tp_user_msg_tpl
 *
 * @method \app\common\model\UserMsgTpl tp()
 * @property int $mmt_code 用户消息模板编号
 * @property string $mmt_name 模板名称
 * @property int $mmt_message_switch 站内信接收开关
 * @property string $mmt_message_content 站内信消息内容
 * @property int $mmt_short_switch 短信接收开关
 * @property string|null $mmt_short_content 短信接收内容
 * @property string|null $mmt_short_sign 短信签名
 * @property string|null $mmt_short_code 短信模板ID
 * @property int $mmt_mail_switch 邮件接收开关
 * @property string|null $mmt_mail_subject 邮件标题
 * @property string|null $mmt_mail_content 邮件内容
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtMailContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtMailSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtMailSwitch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtMessageContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtMessageSwitch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtShortContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtShortSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\msg\tp_user_msg_tpl whereMmtShortSwitch($value)
 * @mixin \Eloquent
 */
class tp_user_msg_tpl extends BaseModel
{
    protected $table = 'tp_user_msg_tpl';
    protected $primaryKey = 'mmt_code';
}