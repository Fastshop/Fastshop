<?php
namespace model\tp\order;
use App\Models\BaseModel;

/**
 * model\tp\order\tp_order_action
 *
 * @method \think\db\Query tp()
 * @property int $action_id 表id
 * @property int $order_id 订单ID
 * @property int|null $action_user 操作人 0 为用户操作，其他为管理员id
 * @property int $order_status 订单状态
 * @property int $shipping_status 配送状态
 * @property int $pay_status 支付状态
 * @property string $action_note 操作备注
 * @property int $log_time 操作时间
 * @property string|null $status_desc 状态描述
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereActionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereActionNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereActionUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereLogTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereShippingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\order\tp_order_action whereStatusDesc($value)
 * @mixin \Eloquent
 */
class tp_order_action extends BaseModel
{
    protected $table = 'tp_order_action';
    protected $primaryKey = 'action_id';
}