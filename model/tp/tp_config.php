<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_config
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property string|null $name 配置的key键名
 * @property string|null $value 配置的val值
 * @property string|null $inc_type 配置分组
 * @property string|null $desc 描述
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config whereIncType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_config whereValue($value)
 * @mixin \Eloquent
 */
class tp_config extends BaseModel
{
    protected $table = 'tp_config';
    protected $primaryKey = 'id';
}