<?php
namespace model\tp\prom;
use App\Models\BaseModel;

/**
 * model\tp\prom\tp_prom_order
 *
 * @method \app\common\model\PromOrder tp()
 * @property int $id
 * @property string $name 活动名称
 * @property int $type 活动类型
 * @property float|null $money 最小金额
 * @property string|null $expression 优惠体现
 * @property string|null $description 活动描述
 * @property int|null $start_time 活动开始时间
 * @property int|null $end_time 活动结束时间
 * @property int|null $is_close
 * @property string|null $group 适用范围
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereExpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereIsClose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_order whereType($value)
 * @mixin \Eloquent
 */
class tp_prom_order extends BaseModel
{
    protected $table = 'tp_prom_order';
    protected $primaryKey = 'id';
}