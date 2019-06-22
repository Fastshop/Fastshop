<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_payment
 *
 * @method \think\db\Query tp()
 * @property int $pay_id 表id
 * @property string $pay_code 支付code
 * @property string $pay_name 支付方式名称
 * @property string $pay_fee 手续费
 * @property string $pay_desc 描述
 * @property int $pay_order pay_coder
 * @property string $pay_config 配置
 * @property int $enabled 开启
 * @property int $is_cod 是否货到付款
 * @property int $is_online 是否在线支付
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment whereIsCod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment whereIsOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_payment wherePayOrder($value)
 * @mixin \Eloquent
 */
class tp_payment extends BaseModel
{
    protected $table = 'tp_payment';
    protected $primaryKey = 'pay_id';
}