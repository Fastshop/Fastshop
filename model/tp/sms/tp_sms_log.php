<?php
namespace model\tp\sms;
use App\Models\BaseModel;

/**
 * model\tp\sms\tp_sms_log
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property string|null $mobile 手机号
 * @property string|null $session_id session_id
 * @property int|null $add_time 发送时间
 * @property string|null $code 验证码
 * @property int $status 发送状态,1:成功,0:失败
 * @property string|null $msg 短信内容
 * @property int|null $scene 发送场景,1:用户注册,2:找回密码,3:客户下单,4:客户支付,5:商家发货,6:身份验证
 * @property string|null $error_msg 发送短信异常内容
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereErrorMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereScene($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_log whereStatus($value)
 * @mixin \Eloquent
 */
class tp_sms_log extends BaseModel
{
    protected $table = 'tp_sms_log';
    protected $primaryKey = 'id';
}