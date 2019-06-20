<?php
namespace App\Models;

// uses

/**
 * App\Models\MemberModel
 *
 * @package shop.pro
 * @since 2019-06-16
 * @property int $member_id 会员id
 * @property string $member_name 会员名称
 * @property string|null $member_truename 真实姓名
 * @property string|null $member_avatar 会员头像
 * @property int|null $member_sex 会员性别
 * @property string|null $member_birthday 生日
 * @property string $member_passwd 会员密码
 * @property string|null $member_paypwd 支付密码
 * @property string $member_email 会员邮箱
 * @property int $member_email_bind 0未绑定1已绑定
 * @property string|null $member_mobile 手机号
 * @property int $member_mobile_bind 0未绑定1已绑定
 * @property string|null $member_qq qq
 * @property string|null $member_ww 阿里旺旺
 * @property int $member_login_num 登录次数
 * @property string $member_time 会员注册时间
 * @property string $member_login_time 当前登录时间
 * @property string $member_old_login_time 上次登录时间
 * @property string|null $member_login_ip 当前登录ip
 * @property string|null $member_old_login_ip 上次登录ip
 * @property string|null $member_qqopenid qq互联id
 * @property string|null $member_qqinfo qq账号相关信息
 * @property string|null $member_sinaopenid 新浪微博登录id
 * @property string|null $member_sinainfo 新浪账号相关信息序列化值
 * @property string|null $weixin_unionid 微信用户统一标识
 * @property string|null $weixin_info 微信用户相关信息
 * @property int $member_points 会员积分
 * @property float $available_predeposit 预存款可用金额
 * @property float $freeze_predeposit 预存款冻结金额
 * @property float $available_rc_balance 可用充值卡余额
 * @property float $freeze_rc_balance 冻结充值卡余额
 * @property int $inform_allow 是否允许举报(1可以/2不可以)
 * @property int $is_buy 会员是否有购买权限 1为开启 0为关闭
 * @property int $is_allowtalk 会员是否有咨询和发送站内信的权限 1为开启 0为关闭
 * @property int $member_state 会员的开启状态 1为开启 0为关闭
 * @property int $member_snsvisitnum sns空间访问次数
 * @property int|null $member_areaid 地区ID
 * @property int|null $member_cityid 城市ID
 * @property int|null $member_provinceid 省份ID
 * @property string|null $member_areainfo 地区内容
 * @property string|null $member_privacy 隐私设定
 * @property int $member_exppoints 会员经验值
 * @property int|null $invite_one 一级会员
 * @property int|null $invite_two 二级会员
 * @property int|null $invite_three 三级会员
 * @property int|null $inviter_id 邀请人ID
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereAvailablePredeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereAvailableRcBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereFreezePredeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereFreezeRcBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereInformAllow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereInviteOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereInviteThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereInviteTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereInviterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereIsAllowtalk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereIsBuy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberAreaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberAreainfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberCityid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberEmailBind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberExppoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberLoginNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberMobileBind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberOldLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberOldLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberPasswd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberPaypwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberPrivacy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberProvinceid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberQq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberQqinfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberQqopenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberSinainfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberSinaopenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberSnsvisitnum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberTruename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereMemberWw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereWeixinInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MemberModel whereWeixinUnionid($value)
 * @mixin \Eloquent
 */
class MemberModel extends BaseModel {
    
    protected $table = "mall_member";
    
    protected $primaryKey = "member_id";
}
