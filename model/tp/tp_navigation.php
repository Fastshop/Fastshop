<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_navigation
 *
 * @method \think\db\Query tp()
 * @property int $id 前台导航表
 * @property string|null $name 导航名称
 * @property int|null $is_show 是否显示
 * @property int|null $is_new 是否新窗口
 * @property int|null $sort 排序
 * @property string|null $url 链接地址
 * @property string $position 菜单位置，top顶部，bottom底部
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation whereIsNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_navigation whereUrl($value)
 * @mixin \Eloquent
 */
class tp_navigation extends BaseModel
{
    protected $table = 'tp_navigation';
    protected $primaryKey = 'id';
}