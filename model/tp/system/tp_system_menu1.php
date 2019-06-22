<?php
namespace model\tp\system;
use App\Models\BaseModel;

/**
 * model\tp\system\tp_system_menu1
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string|null $name 权限名字
 * @property string|null $group 所属分组
 * @property string|null $right 权限码(控制器+动作)
 * @property int|null $is_del 删除状态 1删除,0正常
 * @property int|null $type 所属模块类型 0admin 1home 2mobile 3api
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 whereIsDel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 whereRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_menu1 whereType($value)
 * @mixin \Eloquent
 */
class tp_system_menu1 extends BaseModel
{
    protected $table = 'tp_system_menu1';
    protected $primaryKey = 'id';
}