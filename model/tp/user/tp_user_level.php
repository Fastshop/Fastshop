<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_level
 *
 * @method \app\common\model\UserLevel tp()
 * @property int $level_id 表id
 * @property string|null $level_name 头衔名称
 * @property float|null $amount 等级必要金额
 * @property int|null $discount 折扣
 * @property string|null $describe 头街 描述
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level whereDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_level whereLevelName($value)
 * @mixin \Eloquent
 */
class tp_user_level extends BaseModel
{
    protected $table = 'tp_user_level';
    protected $primaryKey = 'level_id';
}