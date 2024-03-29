<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: IT宇宙人
 * Date: 2015-09-09
 */

namespace app\common\logic;

/**
 * 物流消息逻辑定义
 * Class CatsLogic
 * @package admin\Logic
 */
class MessageLogisticsLogic extends MessageBase
{
    /**
     * 添加一条物流消息
     */
    public function addMessage()
    {
        $this->message['category'] = 2;
        db('message_logistics')->insert($this->message);
        $message_id = db('message_logistics')->getLastInsID();
        if($message_id) {
            $this->message['message_id'] = $message_id;
        }
    }

    /**
     * 发送退款消息
     * @param $order_id
     * @param $money
     */
    public function sendRefundNotice($order_id, $money)
    {
        $order = Db('order')->where('order_id', $order_id)->find();
        $goods_id = Db('order_goods')->where('order_id', $order_id)->value('goods_id');
        $original_img = Db('goods')->where('goods_id', $goods_id)->value('original_img');
        $data['order_id'] = $order_id;
        $data['order_sn'] = $order['order_sn'];
        $data['img_uri'] = $original_img;
        $data['type'] = 6;
        $data['mmt_code'] = $this->getCodeByType($data['type']);
        $data['message_title'] = '订单已退款';
        $data['message_content'] = ""; // 空着，使用模板内容
        $data['users'] = [$order['user_id']];
        $data['message_val'] = ['money' => $money];
        $this->sendMessageLogistics($data);
    }

    /**
     * 获取编号
     * @param $type
     * @return string
     */
    public function getCodeByType($type)
    {
        // 1到货通知2发货提醒3签收提醒4评价提醒5退货提醒6退款提醒',
        switch($type) {
            case 1:
                $mmt_code = '';
                break;
            case 2:
                $mmt_code = 'deliver_goods_logistics';
                break;
            case 3:
                $mmt_code = '';
                break;
            case 4:
                $mmt_code = 'evaluate_logistics';
                break;
            case 5:
                $mmt_code = '';
                break;
            case 6:
                $mmt_code = 'refund_logistics';
                break;
            case 7:
                $mmt_code = 'virtual_order_logistics';
                break;
            default:
                $mmt_code = '';
                break;
        }
        return $mmt_code;
    }

    /**
     * 发一条物流消息
     * @param array $send_data |发送内容
     */
    public function sendMessageLogistics($send_data = [])
    {
        $data['message_title'] = ''; // 消息标题
        $data['message_content'] = ''; // 如果空，有模板则用模板内容
        $data['img_url'] = ''; // 图片地址
        // type:1到货通知2发货提醒3签收提醒4评价提醒5退货提醒6退款提醒7虚拟
        $data['type'] = 1;
        $data['order_sn'] = ''; // 单号
        $data['order_id'] = ''; // 物流订单id
        $data['mmt_code'] = ''; // 消息模板编号
        $data['users'] = []; // 向用户发消息
        $data['message_val'] = []; // 模板变量名和值
        $data = array_merge($data, $send_data);

        $data['category'] = 2; // 物流类型
        $this->setSendData($data);
        $this->sendMessage();
    }

    /**
     * 发送虚拟订单消息
     * @param $order
     * @param $goods
     */

    public function sendVirtualOrder($order, $goods)
    {

        $data['order_id'] = $order['order_id'];
        $data['order_sn'] = $order['order_sn'];
        $data['img_uri'] = $goods['original_img'];
        $data['type'] = 7;
        $data['mmt_code'] = $this->getCodeByType($data['type']);
        $data['message_title'] = '商品已发货';
        $data['message_content'] = $goods['goods_name'];
        $data['users'] = [$order['user_id']];
        $data['message_val'] = [];
        $this->sendMessageLogistics($data);
    }

    /**
     * 删除消息
     * @param $prom_id |活动id
     * @param $type |消息类型
     * @throws \think\Exception
     */
    public function deletedMessage($prom_id, $type)
    {
        $message_id = db('message_logistics')->where(['order_id' => $prom_id, 'type' => $type])->column('message_id');
        if($message_id) {
            db('message_logistics')->where(['order_id' => $prom_id, 'prom_type' => $type])->delete();
            db('user_message')->where(['message_id' => ['in', $message_id], 'category' => 2])->delete();
        }
    }

    /**
     * 检测必填参数
     * @return bool
     */
    public function checkParam()
    {
        if(empty($this->message['message_title']) || empty($this->message['order_sn'])
            || empty($this->message['send_time']) || empty($this->message['img_uri'])
            || empty($this->message['type']) || empty($this->message['order_id'])
            || empty($this->message['mmt_code'])
        ) {
            return FALSE;
        }
        return TRUE;
    }

    /**
     * 必填
     * @param $value
     */
    public function setImgUri($value)
    {
        $this->message['img_uri'] = $value;
    }

    /**
     * 必填
     * type:1到货通知2发货提醒3签收提醒4评价提醒5退货提醒6退款提醒7虚拟商品
     * @param $value
     */
    public function setType($value)
    {
        $this->message['type'] = $value;
        $this->message['mmt_code'] = $this->getCodeByType($value);
    }

    /**
     * 必填
     * @param $value
     */
    public function setOrderId($value)
    {
        $this->message['order_id'] = $value;
    }

    /**
     * 必填
     * @param $value
     */
    public function setOrderSn($value)
    {
        $this->message['order_sn'] = $value;
    }
}