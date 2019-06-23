<?php
namespace model\tp\order;
use App\Models\BaseModel;

/**
 * model\tp\order\tp_order
 *
 * @method \app\common\model\Order tp()
 * @property int $order_id 订单id
 * @property string $order_sn 订单编号
 * @property int $user_id 用户id
 * @property int $order_status 订单状态
 * @property int $shipping_status 发货状态
 * @property int $pay_status 支付状态
 * @property string $consignee 收货人
 * @property int $country 国家
 * @property int $province 省份
 * @property int $city 城市
 * @property int $district 县区
 * @property int|null $twon 乡镇
 * @property string $address 地址
 * @property string $zipcode 邮政编码
 * @property string $mobile 手机
 * @property string $email 邮件
 * @property string $shipping_code 物流code
 * @property string $shipping_name 物流名称
 * @property string $pay_code 支付code
 * @property string $pay_name 支付方式名称
 * @property string|null $invoice_title 发票抬头
 * @property string|null $taxpayer 纳税人识别号
 * @property string|null $invoice_desc 发票内容
 * @property float $goods_price 商品总价
 * @property float $shipping_price 邮费
 * @property float $user_money 使用余额
 * @property float|null $coupon_price 优惠券抵扣
 * @property int $integral 使用积分
 * @property float $integral_money 使用积分抵多少钱
 * @property float $order_amount 应付款金额
 * @property float|null $total_amount 订单总价
 * @property int $add_time 下单时间
 * @property int|null $shipping_time 最后新发货时间
 * @property int|null $confirm_time 收货确认时间
 * @property int $pay_time 支付时间
 * @property string|null $transaction_id 第三方平台交易流水号
 * @property int|null $prom_id 活动ID
 * @property int|null $prom_type 订单类型：0普通订单4预售订单5虚拟订单6拼团订单
 * @property int $order_prom_id 活动id
 * @property float $order_prom_amount 活动优惠金额
 * @property float $discount 价格调整
 * @property string $user_note 用户备注
 * @property string|null $admin_note 管理员备注
 * @property string|null $parent_sn 父单单号
 * @property int|null $is_distribut 是否已分成0未分成1已分成
 * @property float|null $paid_money 订金
 * @property int $shop_id 自提点门店id
 * @property int $deleted 用户假删除标识,1:删除,0未删除
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereAdminNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereConfirmTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereConsignee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereCouponPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereIntegral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereIntegralMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereInvoiceDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereInvoiceTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereIsDistribut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereOrderPromAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereOrderPromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePaidMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereParentSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePayCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order wherePromType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereShippingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereShippingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereShippingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereShippingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereShippingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereTaxpayer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereTwon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereUserMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereUserNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order whereZipcode($value)
 * @mixin \Eloquent
 */
class tp_order extends BaseModel
{
    protected $table = 'tp_order';
    protected $primaryKey = 'order_id';
}