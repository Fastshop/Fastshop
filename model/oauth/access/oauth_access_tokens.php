<?php
namespace model\oauth\access;
use App\Models\BaseModel;

/**
 * model\oauth\access\oauth_access_tokens
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $user_id
 * @property int $client_id
 * @property string|null $name
 * @property string|null $scopes
 * @property int $revoked
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\access\oauth_access_tokens whereUserId($value)
 * @mixin \Eloquent
 */
class oauth_access_tokens extends BaseModel
{
    protected $table = 'oauth_access_tokens';
    protected $primaryKey = 'id';
}