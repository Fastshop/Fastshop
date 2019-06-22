<?php
namespace model\tp\wx\tpl;
use App\Models\BaseModel;

/**
 * model\tp\wx\tpl\tp_wx_tpl_msg
 *
 * @method \app\common\model\WxTplMsg tp()
 * @property int $id 微信模板消息
 * @property string|null $title 模板标题
 * @property string|null $template_sn 模板编号
 * @property string|null $template_id 模板id
 * @property string|null $remark 留言
 * @property int|null $is_use 该模板是否启用
 * @property int|null $add_time 添加模板的时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereIsUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereTemplateSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tpl\tp_wx_tpl_msg whereTitle($value)
 * @mixin \Eloquent
 */
class tp_wx_tpl_msg extends BaseModel
{
    protected $table = 'tp_wx_tpl_msg';
    protected $primaryKey = 'id';
}