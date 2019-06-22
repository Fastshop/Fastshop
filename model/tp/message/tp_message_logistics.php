<?php
namespace model\tp\message;
use App\Models\BaseModel;

/**
 * model\tp\message\tp_message_logistics
 *
 * @method \app\common\model\MessageLogistics tp()
 * @property int $message_id
 * @property string|null $message_title 消息标题
 * @property string $message_content 消息内容
 * @property string|null $img_uri 图片地址
 * @property int $send_time 发送时间
 * @property string $order_sn 单号
 * @property int $order_id 物流订单id
 * @property string|null $mmt_code 用户消息模板编号
 * @property int|null $type 1到货通知2发货提醒3签收提醒4评价提醒5退货提醒6退款提醒7虚拟商品
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereImgUri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereMessageContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereMessageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereMmtCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereSendTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\message\tp_message_logistics whereType($value)
 * @mixin \Eloquent
 */
class tp_message_logistics extends BaseModel
{
    protected $table = 'tp_message_logistics';
    protected $primaryKey = 'message_id';
}