<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_coupon
 *
 * @method \app\common\model\Coupon tp()
 * @property int $id 表id
 * @property string $name 优惠券名字
 * @property int $type 发放类型 0下单赠送1 指定发放 2 免费领取 3线下发放
 * @property float $money 优惠券金额
 * @property float $condition 使用条件
 * @property int|null $createnum 发放数量
 * @property int|null $send_num 已领取数量
 * @property int|null $use_num 已使用数量
 * @property int|null $send_start_time 发放开始时间
 * @property int|null $send_end_time 发放结束时间
 * @property int|null $use_start_time 使用开始时间
 * @property int|null $use_end_time 使用结束时间
 * @property int|null $add_time 添加时间
 * @property int|null $status 状态：1有效,2无效
 * @property int|null $use_type 使用范围：0全店通用1指定商品可用2指定分类商品可用
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereCreatenum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereSendEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereSendNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereSendStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereUseEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereUseNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereUseStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_coupon whereUseType($value)
 * @mixin \Eloquent
 */
class tp_coupon extends BaseModel
{
    protected $table = 'tp_coupon';
    protected $primaryKey = 'id';
}