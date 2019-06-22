<?php
namespace model\tp\freight;
use App\Models\BaseModel;

/**
 * model\tp\freight\tp_freight_region
 *
 * @method \app\common\model\FreightRegion tp()
 * @property int $template_id 模板id
 * @property int $config_id 运费模板配置ID
 * @property int $region_id region表id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_region whereConfigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_region whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\freight\tp_freight_region whereTemplateId($value)
 * @mixin \Eloquent
 */
class tp_freight_region extends BaseModel
{
    protected $table = 'tp_freight_region';
    protected $primaryKey = '';
}