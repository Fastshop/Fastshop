<?php
namespace model\tp\area;
use App\Models\BaseModel;

/**
 * model\tp\area\tp_area_region
 *
 * @method \think\db\Query tp()
 * @property int $shipping_area_id 物流配置id
 * @property int $region_id 地区id对应region表id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\area\tp_area_region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\area\tp_area_region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\area\tp_area_region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\area\tp_area_region whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\area\tp_area_region whereShippingAreaId($value)
 * @mixin \Eloquent
 */
class tp_area_region extends BaseModel
{
    protected $table = 'tp_area_region';
    protected $primaryKey = 'shipping_area_id';
}