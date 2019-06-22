<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_extend
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $user_id
 * @property string|null $invoice_title 发票抬头
 * @property string|null $taxpayer 纳税人识别号
 * @property string|null $invoice_desc 不开发票/明细
 * @property string|null $realname 真实姓名
 * @property string|null $idcard 身份证号
 * @property string $cash_alipay 提现支付宝号
 * @property string $cash_unionpay 提现银行卡号
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereCashAlipay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereCashUnionpay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereIdcard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereInvoiceDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereInvoiceTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereRealname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereTaxpayer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_extend whereUserId($value)
 * @mixin \Eloquent
 */
class tp_user_extend extends BaseModel
{
    protected $table = 'tp_user_extend';
    protected $primaryKey = 'id';
}