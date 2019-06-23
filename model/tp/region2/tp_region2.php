<?php
namespace model\tp\region2;
use App\Models\BaseModel;

/**
 * model\tp\region2\tp_region2
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property string $name 地区名称
 * @property int|null $parent_id 父id
 * @property int|null $level 地区等级
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region2\tp_region2 whereParentId($value)
 * @mixin \Eloquent
 */
class tp_region2 extends BaseModel
{
    protected $table = 'tp_region2';
    protected $primaryKey = 'id';
}