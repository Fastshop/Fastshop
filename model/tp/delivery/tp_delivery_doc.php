<?php
namespace model\tp\delivery;
use App\Models\BaseModel;

/**
 * model\tp\delivery\tp_delivery_doc
 *
 * @method \app\common\model\DeliveryDoc tp()
 * @property int $id 发货单ID
 * @property int $order_id 订单ID
 * @property string $order_sn 订单编号
 * @property int $user_id 用户ID
 * @property int $admin_id 管理员ID
 * @property string $consignee 收货人
 * @property string|null $zipcode 邮编
 * @property string $mobile 联系手机
 * @property int $country 国ID
 * @property int $province 省ID
 * @property int $city 市ID
 * @property int $district 区ID
 * @property string $address 地址
 * @property string|null $shipping_code 物流code
 * @property string|null $shipping_name 快递名称
 * @property float|null $shipping_price 运费
 * @property string|null $invoice_no 物流单号
 * @property string|null $tel 座机电话
 * @property string|null $note 管理员添加的备注信息
 * @property int|null $best_time 友好收货时间
 * @property int $create_time 创建时间
 * @property int|null $is_del 是否删除
 * @property int|null $send_type 发货方式0自填快递1在线预约2电子面单3无需物流
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereBestTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereConsignee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereSendType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereShippingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereShippingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereShippingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\delivery\tp_delivery_doc whereZipcode($value)
 * @mixin \Eloquent
 */
class tp_delivery_doc extends BaseModel
{
    protected $table = 'tp_delivery_doc';
    protected $primaryKey = 'id';
}