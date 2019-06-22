<?php
namespace model\tp\vr\order;
use App\Models\BaseModel;

/**
 * model\tp\vr\order\tp_vr_order_code
 *
 * @method \app\common\model\VrOrderCode tp()
 * @property int $rec_id 兑换码表索引id
 * @property int $order_id 虚拟订单id
 * @property int $user_id 买家ID
 * @property string $vr_code 兑换码
 * @property int $vr_state 使用状态 0:(默认)未使用1:已使用2:已过期
 * @property int $vr_usetime 使用时间
 * @property float $pay_price 实际支付金额(结算)
 * @property int $vr_indate 过期时间
 * @property int $refund_lock 退款锁定状态:0为正常,1为锁定,2为同意,默认为0
 * @property int $vr_invalid_refund 允许过期退款1是0否
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code wherePayPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereRecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereRefundLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereVrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereVrIndate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereVrInvalidRefund($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereVrState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\vr\order\tp_vr_order_code whereVrUsetime($value)
 * @mixin \Eloquent
 */
class tp_vr_order_code extends BaseModel
{
    protected $table = 'tp_vr_order_code';
    protected $primaryKey = 'rec_id';
}