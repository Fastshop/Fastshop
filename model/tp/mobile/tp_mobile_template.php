<?php
namespace model\tp\mobile;
use App\Models\BaseModel;

/**
 * model\tp\mobile\tp_mobile_template
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $is_index 是否设为首页 0否 1是
 * @property string $template_name 模板名称
 * @property string $template_html 保存编辑后的HTML
 * @property int $is_show 是否显示 0不显示  1显示
 * @property int $add_time 添加时间
 * @property string $block_info 接口数据
 * @property int $type 模板类型 0内页  1首页
 * @property string|null $thumb 模板缩略图
 * @property int|null $style_id 从模板库中添加风格id，
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereBlockInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereIsIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereStyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereTemplateHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\tp_mobile_template whereType($value)
 * @mixin \Eloquent
 */
class tp_mobile_template extends BaseModel
{
    protected $table = 'tp_mobile_template';
    protected $primaryKey = 'id';
}