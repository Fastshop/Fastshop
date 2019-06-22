<?php
namespace model\tp\freight;
use App\Models\BaseModel;

/**
 * model\tp\freight\tp_freight_template
 *
 * @method \app\common\model\FreightTemplate tp()
 * @property int $template_id 运费模板ID
 * @property string $template_name 模板名称
 * @property int $type 0 件数；1 商品重量；2 商品体积
 * @property int $is_enable_default 是否启用使用默认运费配置,0:不启用，1:启用
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template whereIsEnableDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template whereTemplateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_template whereType($value)
 * @mixin \Eloquent
 */
class tp_freight_template extends BaseModel
{
    protected $table = 'tp_freight_template';
    protected $primaryKey = 'template_id';
}