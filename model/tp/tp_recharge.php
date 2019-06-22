<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_recharge
 *
 * @method \app\common\model\Recharge tp()
 * @property int $order_id
 * @property int $user_id 会员ID
 * @property string|null $nickname 会员昵称
 * @property string $order_sn 充值单号
 * @property float|null $account 充值金额
 * @property int|null $ctime 充值时间
 * @property int|null $pay_time 支付时间
 * @property string|null $pay_code
 * @property string|null $pay_name 支付方式
 * @property int|null $pay_status 充值状态0:待支付 1:充值成功 2:交易关闭
 * @property int|null $buy_vip 是否为VIP充值，1是
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereBuyVip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge wherePayCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge wherePayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge wherePayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_recharge whereUserId($value)
 * @mixin \Eloquent
 */
class tp_recharge extends BaseModel
{
    protected $table = 'tp_recharge';
    protected $primaryKey = 'order_id';
}