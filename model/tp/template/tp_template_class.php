<?php
namespace model\tp\template;
use App\Models\BaseModel;

/**
 * model\tp\template\tp_template_class
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $parent_id
 * @property int|null $type 类型  1行业  2风格
 * @property string|null $name 行业或风格名称
 * @property int|null $sort_order 排序
 * @property int|null $add_time 添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\template\tp_template_class whereType($value)
 * @mixin \Eloquent
 */
class tp_template_class extends BaseModel
{
    protected $table = 'tp_template_class';
    protected $primaryKey = 'id';
}