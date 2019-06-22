<?php
namespace model\admin;
use App\Models\BaseModel;

/**
 * model\admin\admin_menu
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $parent_id
 * @property int $order
 * @property string $title
 * @property string $icon
 * @property string|null $uri
 * @property string|null $permission
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereUri($value)
 * @mixin \Eloquent
 */
class admin_menu extends BaseModel
{
    protected $table = 'admin_menu';
    protected $primaryKey = 'id';
}