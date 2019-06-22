<?php
namespace model\tp\system;
use App\Models\BaseModel;

/**
 * model\tp\system\tp_system_menu
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string|null $name 权限名字
 * @property string|null $group 所属分组
 * @property string|null $right 权限码(控制器+动作)
 * @property int|null $is_del 删除状态 1删除,0正常
 * @property int|null $type 所属模块类型 0admin 1home 2mobile 3api
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu whereRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu whereType($value)
 * @mixin \Eloquent
 */
class tp_system_menu extends BaseModel
{
    protected $table = 'tp_system_menu';
    protected $primaryKey = 'id';
}