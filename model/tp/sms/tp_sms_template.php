<?php
namespace model\tp\sms;
use App\Models\BaseModel;

/**
 * model\tp\sms\tp_sms_template
 *
 * @method \think\db\Query tp()
 * @property int $tpl_id 自增ID
 * @property string $sms_sign 短信签名
 * @property string $sms_tpl_code 短信模板ID
 * @property string $tpl_content 发送短信内容
 * @property string $send_scene 短信发送场景
 * @property int $add_time 添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template whereSendScene($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template whereSmsSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template whereSmsTplCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template whereTplContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\sms\tp_sms_template whereTplId($value)
 * @mixin \Eloquent
 */
class tp_sms_template extends BaseModel
{
    protected $table = 'tp_sms_template';
    protected $primaryKey = 'tpl_id';
}