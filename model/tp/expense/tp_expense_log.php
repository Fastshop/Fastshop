<?php
namespace model\tp\expense;
use App\Models\BaseModel;

/**
 * model\tp\expense\tp_expense_log
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $admin_id 操作管理员
 * @property float|null $money 支出金额
 * @property int|null $integral 赠送积分
 * @property int|null $type 支出类型0用户提现,1订单退款,2其他,3注册,4邀请,5分享,6评论
 * @property int|null $addtime 日志记录时间
 * @property int|null $log_type_id 业务关联ID
 * @property int|null $user_id 涉及会员id
 * @property int|null $user_name 涉及用户
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereIntegral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereLogTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\expense\tp_expense_log whereUserName($value)
 * @mixin \Eloquent
 */
class tp_expense_log extends BaseModel
{
    protected $table = 'tp_expense_log';
    protected $primaryKey = 'id';
}