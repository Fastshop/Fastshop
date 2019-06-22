<?php
namespace model\oauth\personal\access;
use App\Models\BaseModel;

/**
 * model\oauth\personal\access\oauth_personal_access_clients
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $client_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\oauth\personal\access\oauth_personal_access_clients whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class oauth_personal_access_clients extends BaseModel
{
    protected $table = 'oauth_personal_access_clients';
    protected $primaryKey = 'id';
}