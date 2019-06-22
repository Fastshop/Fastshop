<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_sign
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $user_id 用户id
 * @property int|null $sign_total 累计签到天数
 * @property int|null $sign_count 连续签到天数
 * @property string|null $sign_last 最后签到时间，时间格式20170907
 * @property string|null $sign_time 历史签到时间，以逗号隔开
 * @property int|null $cumtrapz 用户累计签到总积分
 * @property int|null $this_month 本月累计积分
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereCumtrapz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereSignCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereSignLast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereSignTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereSignTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereThisMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_sign whereUserId($value)
 * @mixin \Eloquent
 */
class tp_user_sign extends BaseModel
{
    protected $table = 'tp_user_sign';
    protected $primaryKey = 'id';
}