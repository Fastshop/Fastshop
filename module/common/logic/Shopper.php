<?php
/**
 * @author Moshihui
 * @email moshihui@gmail.com
 * @qq 86146002
 */

/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * 采用最新Thinkphp5助手函数特性实现单字母函数M D U等简写方式
 * ============================================================================
 * Author: lhb
 * Date: 2017-05-15
 */

namespace app\common\logic;

use app\common\util\TpshopException;
use think\Db;
use think\Model;

/**
 * 门店管理员类
 */
class Shopper extends Model
{
    private $shopper_name;
    private $shopper;
    private $shop;

    public function setShopperName($shopper_name)
    {
        $this->shopper_name = $shopper_name;
    }

    public function login($password)
    {
        $Shopper = new \app\common\model\Shopper();
        $this->shopper = $Shopper->where(['shopper_name' => $this->shopper_name])->find();
        if(empty($this->shopper)) {
            throw new TpshopException('门店登录', 0, ['status' => 0, 'msg' => '门店账号不存在']);
        }
        $this->shop = $this->shopper->shop;
        if($this->shop['deleted'] == 1) {
            throw new TpshopException('门店登录', 0, ['status' => 0, 'msg' => '门店已经被删除']);
        }
        if($this->shop['shop_status'] == 0) {
            throw new TpshopException('门店登录', 0, ['status' => 0, 'msg' => '门店已关闭，请联系平台客服']);
        }
        $user = $this->shopper->users;
        if(empty($user)) {
            throw new TpshopException('门店登录', 0, ['status' => 0, 'msg' => '门店没有绑定前台会员']);
        }
        if($user['password'] != $password) {
            throw new TpshopException('门店登录', 0, ['status' => 0, 'msg' => '密码错误']);
        }
        session('shopper', $this->shopper->toArray());
        session('shopper_id', $this->shopper['shopper_id']);
        session('shop_id', $this->shopper['shop_id']);
        $this->shopper->last_login_time = time();
        $this->shopper->save();
        $this->log("门店管理中心登录");
    }

    /**
     * 管理员操作记录
     * @param $content |记录信息
     */
    public function log($content)
    {
        $log['log_time'] = time();
        $log['log_shopper_id'] = $this->shopper['shopper_id'];
        $log['log_shopper_name'] = $this->shopper['shopper_name'];
        $log['log_content'] = $content;
        $log['log_shopper_ip'] = req()->ip();
        $log['log_shop_id'] = $this->shopper['shop_id'];
        $log['log_url'] = req()->action();
        Db::name('shopper_log')->add($log);
    }
}