<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_user
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property int $uid uid
 * @property string $wxname 公众号名称
 * @property string $aeskey aeskey
 * @property int $encode encode
 * @property string $appid appid
 * @property string $appsecret appsecret
 * @property string $wxid 公众号原始ID
 * @property string $weixin 微信号
 * @property string $headerpic 头像地址
 * @property string $token token
 * @property string $w_token 微信对接token
 * @property int $create_time create_time
 * @property int $updatetime updatetime
 * @property string $tplcontentid 内容模版ID
 * @property string $share_ticket 分享ticket
 * @property string $share_dated share_dated
 * @property string $authorizer_access_token authorizer_access_token
 * @property string $authorizer_refresh_token authorizer_refresh_token
 * @property string $authorizer_expires authorizer_expires
 * @property int $type 类型
 * @property string|null $web_access_token  网页授权token
 * @property string|null $web_refresh_token web_refresh_token
 * @property int $web_expires 过期时间
 * @property string $qr qr
 * @property string|null $menu_config 菜单
 * @property int|null $wait_access 微信接入状态,0待接入1已接入
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereAeskey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereAppid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereAppsecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereAuthorizerAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereAuthorizerExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereAuthorizerRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereEncode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereHeaderpic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereMenuConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereQr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereShareDated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereShareTicket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereTplcontentid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereUpdatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWaitAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWebAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWebExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWebRefreshToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWeixin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWxid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_user whereWxname($value)
 * @mixin \Eloquent
 */
class tp_wx_user extends BaseModel
{
    protected $table = 'tp_wx_user';
    protected $primaryKey = 'id';
}