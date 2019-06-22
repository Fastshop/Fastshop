<?php
namespace model\tp\account;
use App\Models\BaseModel;

/**
 * model\tp\account\tp_account_log
 *
 * @method \think\db\Query tp()
 * @property int $log_id 日志id
 * @property int $user_id 用户id
 * @property float|null $user_money 用户金额
 * @property float|null $frozen_money 冻结金额
 * @property int $pay_points 支付积分
 * @property int $change_time 变动时间
 * @property string $desc 描述
 * @property string|null $order_sn 订单编号
 * @property int|null $order_id 订单id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereChangeTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereFrozenMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log wherePayPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\account\tp_account_log whereUserMoney($value)
 * @mixin \Eloquent
 */
class tp_account_log extends BaseModel
{
    protected $table = 'tp_account_log';
    protected $primaryKey = 'log_id';
}