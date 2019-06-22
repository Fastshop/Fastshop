<?php
namespace model\tp\freight;
use App\Models\BaseModel;

/**
 * model\tp\freight\tp_freight_config
 *
 * @method \app\common\model\FreightConfig tp()
 * @property int $config_id 配置id
 * @property float $first_unit 首(重：体积：件）
 * @property float $first_money 首(重：体积：件）运费
 * @property float $continue_unit 继续加（件：重量：体积）区间
 * @property float $continue_money 继续加（件：重量：体积）的运费
 * @property int $template_id 运费模板ID
 * @property int $is_default 是否是默认运费配置.0不是，1是
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereConfigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereContinueMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereContinueUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereFirstMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereFirstUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_config whereTemplateId($value)
 * @mixin \Eloquent
 */
class tp_freight_config extends BaseModel
{
    protected $table = 'tp_freight_config';
    protected $primaryKey = 'config_id';
}