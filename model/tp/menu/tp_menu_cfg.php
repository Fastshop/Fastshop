<?php
namespace model\tp\menu;
use App\Models\BaseModel;

/**
 * model\tp\menu\tp_menu_cfg
 *
 * @method \app\common\model\MenuCfg tp()
 * @property int $menu_id
 * @property string $menu_name 自定义名称
 * @property string $default_name 默认名称
 * @property int $is_show 是否显示
 * @property int $is_tab 是否切块
 * @property string $menu_url 手机端url
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg whereDefaultName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg whereIsTab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg whereMenuName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\menu\tp_menu_cfg whereMenuUrl($value)
 * @mixin \Eloquent
 */
class tp_menu_cfg extends BaseModel
{
    protected $table = 'tp_menu_cfg';
    protected $primaryKey = 'menu_id';
}