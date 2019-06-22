<?php
namespace model\tp\rebate;
use App\Models\BaseModel;

/**
 * model\tp\rebate\tp_rebate_log
 *
 * @method \app\common\model\RebateLog tp()
 * @property int $id 分成记录表
 * @property int|null $user_id 获佣用户
 * @property int|null $buy_user_id 购买人id
 * @property string|null $nickname 购买人名称
 * @property string|null $order_sn 订单编号
 * @property int|null $order_id 订单id
 * @property float|null $goods_price 订单商品总额
 * @property float|null $money 获佣金额
 * @property int|null $level 获佣用户级别
 * @property int|null $create_time 分成记录生成时间
 * @property int|null $confirm 确定收货时间
 * @property int|null $status 0未付款,1已付款, 2等待分成(已收货) 3已分成, 4已取消
 * @property int|null $confirm_time 确定分成或者取消时间
 * @property string|null $remark 如果是取消, 有取消备注
 * @property string|null $detail 记录该笔佣金中来自每个商品的分佣详情
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereBuyUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereConfirm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereConfirmTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\rebate\tp_rebate_log whereUserId($value)
 * @mixin \Eloquent
 */
class tp_rebate_log extends BaseModel
{
    protected $table = 'tp_rebate_log';
    protected $primaryKey = 'id';
}