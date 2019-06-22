<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_robot
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $robot_name 名称
 * @property string|null $avatar 头像
 * @property int $storeid 店铺id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot whereRobotName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_robot whereStoreid($value)
 * @mixin \Eloquent
 */
class tp_kf_robot extends BaseModel
{
    protected $table = 'tp_kf_robot';
    protected $primaryKey = 'id';
}