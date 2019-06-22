<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_access
 *
 * @method \think\db\Query tp()
 * @property int $role_id
 * @property int $node_id
 * @property int $pid
 * @property int $level
 * @property string|null $module
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access whereNodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_access whereRoleId($value)
 * @mixin \Eloquent
 */
class tp_kf_access extends BaseModel
{
    protected $table = 'tp_kf_access';
    protected $primaryKey = '';
}