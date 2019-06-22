<?php
namespace model\tp\prom;
use App\Models\BaseModel;

/**
 * model\tp\prom\tp_prom_goods
 *
 * @method \app\common\model\PromGoods tp()
 * @property int $id 活动ID
 * @property string $title 促销活动名称
 * @property int $type 促销类型
 * @property string $expression 优惠体现
 * @property string|null $description 活动描述
 * @property int $start_time 活动开始时间
 * @property int $end_time 活动结束时间
 * @property int|null $is_end 是否已结束
 * @property string|null $group 适用范围
 * @property string|null $prom_img 活动宣传图片
 * @property int|null $buy_limit 每人限购数
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereBuyLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereExpression($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereIsEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods wherePromImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\tp_prom_goods whereType($value)
 * @mixin \Eloquent
 */
class tp_prom_goods extends BaseModel
{
    protected $table = 'tp_prom_goods';
    protected $primaryKey = 'id';
}