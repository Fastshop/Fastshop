<?php
namespace model\tp\shop;
use App\Models\BaseModel;

/**
 * model\tp\shop\tp_shop_order
 *
 * @method \app\common\model\ShopOrder tp()
 * @property int $shop_order_id 提货核销码。主键
 * @property int $order_id
 * @property string $order_sn
 * @property int $shop_id 门店id
 * @property string $take_time 提货时间
 * @property int $is_write_off 是否核销。0未核销，1已核销
 * @property int $write_off_time 核销时间
 * @property int $add_time 记录插入时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereIsWriteOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereShopOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereTakeTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_order whereWriteOffTime($value)
 * @mixin \Eloquent
 */
class tp_shop_order extends BaseModel
{
    protected $table = 'tp_shop_order';
    protected $primaryKey = 'shop_order_id';
}