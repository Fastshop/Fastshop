<?php
namespace model\tp\ad;
use App\Models\BaseModel;

/**
 * model\tp\ad\tp_ad_position
 *
 * @method \think\db\Query tp()
 * @property int $position_id 表id
 * @property string $position_name 广告位置名称
 * @property int $ad_width 广告位宽度
 * @property int $ad_height 广告位高度
 * @property string $position_desc 广告描述
 * @property string|null $position_style 模板
 * @property int|null $is_open 0关闭1开启
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position whereAdHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position whereAdWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position wherePositionDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position wherePositionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\ad\tp_ad_position wherePositionStyle($value)
 * @mixin \Eloquent
 */
class tp_ad_position extends BaseModel
{
    protected $table = 'tp_ad_position';
    protected $primaryKey = 'position_id';
}