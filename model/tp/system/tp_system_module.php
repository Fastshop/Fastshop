<?php
namespace model\tp\system;
use App\Models\BaseModel;

/**
 * model\tp\system\tp_system_module
 *
 * @method \think\db\Query tp()
 * @property int $mod_id
 * @property string|null $module
 * @property int|null $level
 * @property string|null $ctl
 * @property string|null $act
 * @property string|null $title
 * @property int|null $visible
 * @property int|null $parent_id
 * @property int|null $orderby
 * @property string|null $icon
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereAct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereCtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereModId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereOrderby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_module whereVisible($value)
 * @mixin \Eloquent
 */
class tp_system_module extends BaseModel
{
    protected $table = 'tp_system_module';
    protected $primaryKey = 'mod_id';
}