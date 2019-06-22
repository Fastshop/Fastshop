<?php
namespace model\tp\stock;
use App\Models\BaseModel;

/**
 * model\tp\stock\tp_stock_log
 *
 * @method \app\common\model\StockLog tp()
 * @property int $id
 * @property int|null $goods_id 商品ID
 * @property string|null $goods_name 商品名称
 * @property string|null $goods_spec 商品规格
 * @property string|null $order_sn 订单编号
 * @property int|null $muid 操作用户ID
 * @property int|null $stock 更改库存
 * @property int|null $ctime 操作时间
 * @property int $change_type 更改操作类型 （默认）0订单出库 1商品录入 2退货入库 3盘点更改
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereChangeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereGoodsSpec($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereMuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\stock\tp_stock_log whereStock($value)
 * @mixin \Eloquent
 */
class tp_stock_log extends BaseModel
{
    protected $table = 'tp_stock_log';
    protected $primaryKey = 'id';
}