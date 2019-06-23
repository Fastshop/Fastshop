<?php
namespace model\tp\combination;
use App\Models\BaseModel;

/**
 * model\tp\combination\tp_combination
 *
 * @method \app\common\model\Combination tp()
 * @property int $combination_id 主键
 * @property string $title 标题
 * @property string $desc 描述
 * @property int $is_on_sale 上下架，0下，1上
 * @property int $start_time 活动有效起始时间
 * @property int $end_time 活动有效截止时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination whereCombinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination whereIsOnSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\combination\tp_combination whereTitle($value)
 * @mixin \Eloquent
 */
class tp_combination extends BaseModel
{
    protected $table = 'tp_combination';
    protected $primaryKey = 'combination_id';
}