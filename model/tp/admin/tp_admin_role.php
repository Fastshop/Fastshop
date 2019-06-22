<?php
namespace model\tp\admin;
use App\Models\BaseModel;

/**
 * model\tp\admin\tp_admin_role
 *
 * @method \think\db\Query tp()
 * @property int $role_id 角色ID
 * @property string|null $role_name 角色名称
 * @property string|null $act_list 权限列表
 * @property string|null $role_desc 角色描述
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role whereActList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role whereRoleDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_role whereRoleName($value)
 * @mixin \Eloquent
 */
class tp_admin_role extends BaseModel
{
    protected $table = 'tp_admin_role';
    protected $primaryKey = 'role_id';
}