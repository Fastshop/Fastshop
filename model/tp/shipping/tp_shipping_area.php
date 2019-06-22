<?php
namespace model\tp\shipping;
use App\Models\BaseModel;

/**
 * model\tp\shipping\tp_shipping_area
 *
 * @method \app\common\model\ShippingArea tp()
 * @property int $shipping_area_id 表id
 * @property string $shipping_area_name 配送区域名称
 * @property string $shipping_code 物流id
 * @property string $config 配置首重续重等...序列化存储
 * @property int|null $update_time 更新时间
 * @property int|null $is_default 是否默认
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area whereShippingAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area whereShippingAreaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area whereShippingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shipping\tp_shipping_area whereUpdateTime($value)
 * @mixin \Eloquent
 */
class tp_shipping_area extends BaseModel
{
    protected $table = 'tp_shipping_area';
    protected $primaryKey = 'shipping_area_id';
}