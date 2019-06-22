<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_users
 *
 * @method \app\common\model\Users tp()
 * @property int $user_id 表id
 * @property string $email 邮件
 * @property string $password 密码
 * @property string|null $paypwd 支付密码
 * @property int $sex 0 保密 1 男 2 女
 * @property int $birthday 生日
 * @property float $user_money 用户金额
 * @property float|null $frozen_money 冻结金额
 * @property float|null $distribut_money 累积分佣金额
 * @property int|null $underling_number 用户下线总数
 * @property int $pay_points 消费积分
 * @property int $address_id 默认收货地址
 * @property int $reg_time 注册时间
 * @property int $last_login 最后登录时间
 * @property string $last_ip 最后登录ip
 * @property string $qq QQ
 * @property string $mobile 手机号码
 * @property int $mobile_validated 是否验证手机
 * @property string|null $oauth 第三方来源 wx weibo alipay
 * @property string|null $openid 第三方唯一标示
 * @property string|null $unionid
 * @property string|null $head_pic 头像
 * @property int|null $province 省份
 * @property int|null $city 市区
 * @property int|null $district 县
 * @property int $email_validated 是否验证电子邮箱
 * @property string|null $nickname 第三方返回昵称
 * @property int|null $level 会员等级
 * @property float|null $discount 会员折扣，默认1不享受
 * @property float|null $total_amount 消费累计额度
 * @property int|null $is_lock 是否被锁定冻结
 * @property int|null $is_distribut 是否为分销商 0 否 1 是
 * @property int|null $first_leader 第一个上级
 * @property int|null $second_leader 第二个上级
 * @property int|null $third_leader 第三个上级
 * @property string|null $token 用于app 授权类似于session_id
 * @property int $message_mask 消息掩码
 * @property string $push_id 推送id
 * @property int|null $distribut_level 分销商等级
 * @property int|null $is_vip 是否为VIP ：0不是，1是
 * @property string|null $xcx_qrcode 小程序专属二维码
 * @property string|null $poster 专属推广海报
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereDistributLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereDistributMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereEmailValidated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereFirstLeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereFrozenMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereHeadPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereIsDistribut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereIsLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereIsVip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereLastIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereMessageMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereMobileValidated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereOauth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users wherePayPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users wherePaypwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users wherePoster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users wherePushId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereQq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereRegTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereSecondLeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereThirdLeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereUnderlingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereUnionid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereUserMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_users whereXcxQrcode($value)
 * @mixin \Eloquent
 */
class tp_users extends BaseModel
{
    protected $table = 'tp_users';
    protected $primaryKey = 'user_id';
}