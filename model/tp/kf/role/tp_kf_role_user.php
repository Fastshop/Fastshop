<?php
namespace model\tp\kf\role;
use App\Models\BaseModel;

/**
 * model\tp\kf\role\tp_kf_role_user
 *
 * @method \think\db\Query tp()
 * @property int $user_id
 * @property int $role_id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\role\tp_kf_role_user newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\role\tp_kf_role_user newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\role\tp_kf_role_user query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\role\tp_kf_role_user whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\role\tp_kf_role_user whereUserId($value)
 * @mixin \Eloquent
 */
class tp_kf_role_user extends BaseModel
{
    protected $table = 'tp_kf_role_user';
    protected $primaryKey = '';
}