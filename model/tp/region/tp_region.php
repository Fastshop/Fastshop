<?php
namespace model\tp\region;
use App\Models\BaseModel;

/**
 * model\tp\region\tp_region
 *
 * @method \app\common\model\Region tp()
 * @property int $id 表id
 * @property string|null $name 地区名称
 * @property int|null $level 地区等级 分省市县区
 * @property int|null $parent_id 父id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\region\tp_region whereParentId($value)
 * @mixin \Eloquent
 */
class tp_region extends BaseModel
{
    protected $table = 'tp_region';
    protected $primaryKey = 'id';
}