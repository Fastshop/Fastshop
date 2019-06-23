<?php
namespace model\tp\config;
use App\Models\BaseModel;

/**
 * model\tp\config\tp_config
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property string|null $name 配置的key键名
 * @property string|null $value 配置的val值
 * @property string|null $inc_type 配置分组
 * @property string|null $desc 描述
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config whereIncType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\config\tp_config whereValue($value)
 * @mixin \Eloquent
 */
class tp_config extends BaseModel
{
    protected $table = 'tp_config';
    protected $primaryKey = 'id';
}