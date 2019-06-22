<?php
namespace model\tp\industry;
use App\Models\BaseModel;

/**
 * model\tp\industry\tp_industry_template
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $industry_id 行业id
 * @property int $style_id 风格id
 * @property string $template_name 模板名称
 * @property string $template_html 保存编辑后的HTML
 * @property int $add_time 添加时间
 * @property string $block_info 接口数据
 * @property string|null $thumb 图片展示
 * @property string|null $code_url 二维码
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereBlockInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereCodeUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereStyleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereTemplateHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\industry\tp_industry_template whereThumb($value)
 * @mixin \Eloquent
 */
class tp_industry_template extends BaseModel
{
    protected $table = 'tp_industry_template';
    protected $primaryKey = 'id';
}