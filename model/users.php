<?php
namespace model;
use App\Models\BaseModel;

/**
 * model\users
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\users whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class users extends BaseModel
{
    protected $table = 'users';
    protected $primaryKey = 'id';
}