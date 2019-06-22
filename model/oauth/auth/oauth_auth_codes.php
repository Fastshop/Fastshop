<?php
namespace model\oauth\auth;
use App\Models\BaseModel;

/**
 * model\oauth\auth\oauth_auth_codes
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $user_id
 * @property int $client_id
 * @property string|null $scopes
 * @property int $revoked
 * @property string|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\auth\oauth_auth_codes whereUserId($value)
 * @mixin \Eloquent
 */
class oauth_auth_codes extends BaseModel
{
    protected $table = 'oauth_auth_codes';
    protected $primaryKey = 'id';
}