<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_withdrawals
 *
 * @method \app\common\model\Withdrawals tp()
 * @property int $id 提现申请表
 * @property int|null $user_id 用户id
 * @property float|null $money 提现金额
 * @property int|null $create_time 申请时间
 * @property int|null $check_time 审核时间
 * @property int|null $pay_time 支付时间
 * @property int|null $refuse_time 拒绝时间
 * @property string|null $bank_name 银行名称 如支付宝 微信 中国银行 农业银行等
 * @property string|null $bank_card 银行账号或支付宝账号
 * @property string|null $realname 提款账号真实姓名
 * @property string|null $remark 提现备注
 * @property float|null $taxfee 税收手续费
 * @property int|null $status 状态：-2删除作废-1审核失败0申请中1审核通过2付款成功3付款失败
 * @property string|null $pay_code 付款对账流水号
 * @property string|null $error_code 付款失败错误代码
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereBankCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereCheckTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereErrorCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals wherePayCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals wherePayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereRealname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereRefuseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereTaxfee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_withdrawals whereUserId($value)
 * @mixin \Eloquent
 */
class tp_withdrawals extends BaseModel
{
    protected $table = 'tp_withdrawals';
    protected $primaryKey = 'id';
}