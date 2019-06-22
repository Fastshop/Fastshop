<?php
namespace model\tp\returns;
use App\Models\BaseModel;

/**
 * model\tp\returns\tp_return_goods
 *
 * @method \app\common\model\ReturnGoods tp()
 * @property int $id 退货申请表id自增
 * @property int|null $rec_id order_goods表id
 * @property int|null $order_id 订单id
 * @property string|null $order_sn 订单编号
 * @property int|null $goods_id 商品id
 * @property int|null $goods_num 退货数量
 * @property int|null $type 0仅退款 1退货退款 2换货
 * @property string|null $reason 退换货原因
 * @property string|null $describe 问题描述
 * @property string|null $imgs 拍照图片路径
 * @property int|null $addtime 申请时间
 * @property int|null $status -2用户取消-1不同意0待审核1通过2已发货3已收货4换货完成5退款完成
 * @property string|null $remark 客服备注
 * @property int|null $user_id 用户id
 * @property string|null $spec_key 商品规格key 对应tp_spec_goods_price 表
 * @property string|null $seller_delivery 换货服务，卖家重新发货信息
 * @property float|null $refund_money 退还金额
 * @property float|null $refund_deposit 退还余额
 * @property int|null $refund_integral 退还积分
 * @property int|null $refund_type 退款类型
 * @property string|null $refund_mark 退款备注
 * @property int|null $refund_time 退款时间
 * @property int|null $is_receive 申请售后时是否收到货物
 * @property string|null $delivery 用户发货信息
 * @property int|null $checktime 卖家审核时间
 * @property int|null $receivetime 卖家收货时间
 * @property int|null $canceltime 用户取消时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereCanceltime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereChecktime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereIsReceive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereReceivetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRefundDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRefundIntegral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRefundMark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRefundMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRefundTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRefundType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereSellerDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereSpecKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\returns\tp_return_goods whereUserId($value)
 * @mixin \Eloquent
 */
class tp_return_goods extends BaseModel
{
    protected $table = 'tp_return_goods';
    protected $primaryKey = 'id';
}