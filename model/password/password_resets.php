<?php
namespace model\password;
use App\Models\BaseModel;

/**
 * model\password\password_resets
 *
 * @method \think\db\Query tp()
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\password\password_resets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\password\password_resets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\password\password_resets query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\password\password_resets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\password\password_resets whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\password\password_resets whereToken($value)
 * @mixin \Eloquent
 */
class password_resets extends BaseModel
{
    protected $table = 'password_resets';
    protected $primaryKey = '';
}