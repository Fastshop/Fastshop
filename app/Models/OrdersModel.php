<?php
namespace App\Models;

// uses

/**
 * App\Models\OrdersModel
 *
 * @package shop.pro
 * @since 2019-06-16
 * @mixin 
 * @property int $order_id 订单索引id
 * @property int $order_sn 订单编号
 * @property int $pay_sn 支付单号
 * @property int|null $pay_sn1 预定订单支付订金时的支付单号
 * @property int $store_id 卖家店铺id
 * @property string $store_name 卖家店铺名称
 * @property int $buyer_id 买家id
 * @property string $buyer_name 买家姓名
 * @property string|null $buyer_email 买家电子邮箱
 * @property int $buyer_phone 买家手机
 * @property int $add_time 订单生成时间
 * @property string $payment_code 支付方式名称代码
 * @property int|null $payment_time 支付(付款)时间
 * @property int $finnshed_time 订单完成时间
 * @property float $goods_amount 商品总价格
 * @property float $order_amount 订单总价格
 * @property float $rcb_amount 充值卡支付金额
 * @property float $pd_amount 预存款支付金额
 * @property float $points_money 积分抵用金额
 * @property int $points_number 使用的积分数
 * @property float|null $shipping_fee 运费
 * @property int|null $evaluation_state 评价状态 0未评价，1已评价，2已过期未评价
 * @property int $evaluation_again_state 追加评价状态 0未评价，1已评价，2已过期未评价
 * @property int $order_state 订单状态：0(已取消)10(默认):未付款;20:已付款;30:已发货;40:已收货;
 * @property int|null $refund_state 退款状态:0是无退款,1是部分退款,2是全部退款
 * @property int|null $lock_state 锁定状态:0是正常,大于0是锁定,默认是0
 * @property int $delete_state 删除状态0未删除1放入回收站2彻底删除
 * @property float|null $refund_amount 退款金额
 * @property int|null $delay_time 延迟时间,默认为0
 * @property int $order_from 1WEB2mobile
 * @property string|null $shipping_code 物流单号
 * @property int|null $order_type 订单类型1普通订单(默认),2预定订单,3门店自提订单
 * @property int|null $api_pay_time 在线支付动作时间,只要向第三方支付平台提交就会更新
 * @property int $chain_id 自提门店ID
 * @property int $chain_code 门店提货码
 * @property float|null $rpt_amount 红包值
 * @property string|null $trade_no 外部交易订单号
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereApiPayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereBuyerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereBuyerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereBuyerPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereChainCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereChainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereDelayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereDeleteState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereEvaluationAgainState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereEvaluationState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereFinnshedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereGoodsAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereLockState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereOrderFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereOrderState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePaySn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePaySn1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePaymentCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePaymentTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePdAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePointsMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel wherePointsNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereRcbAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereRefundAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereRefundState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereRptAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereShippingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereShippingFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrdersModel whereTradeNo($value)
 */
class OrdersModel extends BaseModel {
    
    protected $table = "mall_orders";
    protected $primaryKey = "sc_id";
    
}
