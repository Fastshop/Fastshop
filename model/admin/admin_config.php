<?php
namespace model\admin;
use App\Models\BaseModel;

/**
 * model\admin\admin_config
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $name
 * @property string $value
 * @property string|null $description
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_config whereValue($value)
 * @mixin \Eloquent
 */
class admin_config extends BaseModel
{
    protected $table = 'admin_config';
    protected $primaryKey = 'id';
}