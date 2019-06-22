<?php
namespace model\oauth\refresh;
use App\Models\BaseModel;

/**
 * model\oauth\refresh\oauth_refresh_tokens
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $access_token_id
 * @property int $revoked
 * @property string|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens whereAccessTokenId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\refresh\oauth_refresh_tokens whereRevoked($value)
 * @mixin \Eloquent
 */
class oauth_refresh_tokens extends BaseModel
{
    protected $table = 'oauth_refresh_tokens';
    protected $primaryKey = 'id';
}