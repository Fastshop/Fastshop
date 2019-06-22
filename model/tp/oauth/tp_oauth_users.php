<?php
namespace model\tp\oauth;
use App\Models\BaseModel;

/**
 * model\tp\oauth\tp_oauth_users
 *
 * @method \app\common\model\OauthUsers tp()
 * @property int $tu_id 表自增ID
 * @property int $user_id 用户表ID
 * @property string $openid 第三方开放平台openid
 * @property string $oauth 第三方授权平台
 * @property string|null $unionid unionid
 * @property string|null $oauth_child mp标识来自公众号, open标识来自开放平台,用于标识来自哪个第三方授权平台, 因为同是微信平台有来自公众号和开放平台
 * @property string|null $nick_name 绑定时的昵称
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereNickName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereOauth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereOauthChild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereOpenid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereTuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereUnionid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\oauth\tp_oauth_users whereUserId($value)
 * @mixin \Eloquent
 */
class tp_oauth_users extends BaseModel
{
    protected $table = 'tp_oauth_users';
    protected $primaryKey = 'tu_id';
}