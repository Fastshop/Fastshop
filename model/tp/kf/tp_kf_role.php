<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_role
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $name 后台组名
 * @property int $pid 父ID
 * @property int|null $status 是否激活 1：是 0：否
 * @property int $sort 排序权重
 * @property string|null $remark 备注说明
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_role whereStatus($value)
 * @mixin \Eloquent
 */
class tp_kf_role extends BaseModel
{
    protected $table = 'tp_kf_role';
    protected $primaryKey = 'id';
}