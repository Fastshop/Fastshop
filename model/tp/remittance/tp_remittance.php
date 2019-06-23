<?php
namespace model\tp\remittance;
use App\Models\BaseModel;

/**
 * model\tp\remittance\tp_remittance
 *
 * @method \think\db\Query tp()
 * @property int $id 分销用户转账记录表
 * @property int|null $user_id 汇款的用户id
 * @property string|null $bank_name 收款银行名称
 * @property string|null $account_bank 银行账号
 * @property string|null $account_name 开户人名称
 * @property float|null $money 汇款金额
 * @property int|null $status 0汇款失败 1汇款成功
 * @property int|null $handle_time 处理时间
 * @property int|null $create_time 申请时间
 * @property string|null $remark 汇款备注
 * @property int|null $admin_id 处理管理员id
 * @property int|null $withdrawals_id 提现申请表id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereAccountBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereHandleTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\remittance\tp_remittance whereWithdrawalsId($value)
 * @mixin \Eloquent
 */
class tp_remittance extends BaseModel
{
    protected $table = 'tp_remittance';
    protected $primaryKey = 'id';
}