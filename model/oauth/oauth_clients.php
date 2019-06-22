<?php
namespace model\oauth;
use App\Models\BaseModel;

/**
 * model\oauth\oauth_clients
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string $secret
 * @property string $redirect
 * @property int $personal_access_client
 * @property int $password_client
 * @property int $revoked
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\oauth_clients whereUserId($value)
 * @mixin \Eloquent
 */
class oauth_clients extends BaseModel
{
    protected $table = 'oauth_clients';
    protected $primaryKey = 'id';
}