<?php
namespace model\tp\coupon;
use App\Models\BaseModel;

/**
 * model\tp\coupon\tp_coupon_list
 *
 * @method \app\common\model\CouponList tp()
 * @property int $id 表id
 * @property int $cid 优惠券 对应coupon表id
 * @property int $type 发放类型 1 按订单发放 2 注册 3 邀请 4 按用户发放
 * @property int $uid 用户id
 * @property int $order_id 订单id
 * @property int|null $get_order_id 优惠券来自订单ID
 * @property int $use_time 使用时间
 * @property string|null $code 优惠券兑换码
 * @property int $send_time 发放时间
 * @property int|null $status 0未使用1已使用2已过期
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereGetOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\coupon\tp_coupon_list whereUseTime($value)
 * @mixin \Eloquent
 */
class tp_coupon_list extends BaseModel
{
    protected $table = 'tp_coupon_list';
    protected $primaryKey = 'id';
}