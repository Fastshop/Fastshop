<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_invoice
 *
 * @method \app\common\model\Invoice tp()
 * @property int $invoice_id
 * @property int|null $order_id 订单id
 * @property int|null $user_id 用户id
 * @property int|null $invoice_type 0普通发票1电子发票2增值税发票
 * @property float|null $invoice_money 发票金额
 * @property string|null $invoice_title 发票抬头
 * @property string|null $invoice_desc 发票内容
 * @property float|null $invoice_rate 发票税率
 * @property string|null $taxpayer 纳税人识别号
 * @property int|null $status 发票状态0待开1已开2作废
 * @property int|null $atime 开票时间
 * @property int|null $ctime 创建时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereAtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereInvoiceDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereInvoiceMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereInvoiceRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereInvoiceTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereInvoiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereTaxpayer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_invoice whereUserId($value)
 * @mixin \Eloquent
 */
class tp_invoice extends BaseModel
{
    protected $table = 'tp_invoice';
    protected $primaryKey = 'invoice_id';
}