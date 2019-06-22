<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_menu
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $level 菜单级别
 * @property string $name
 * @property int|null $sort 排序
 * @property string|null $type 0 view 1 click
 * @property string|null $value
 * @property string $token
 * @property int|null $pid 上级菜单
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_menu whereValue($value)
 * @mixin \Eloquent
 */
class tp_wx_menu extends BaseModel
{
    protected $table = 'tp_wx_menu';
    protected $primaryKey = 'id';
}