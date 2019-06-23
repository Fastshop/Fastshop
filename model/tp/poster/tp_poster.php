<?php
namespace model\tp\poster;
use App\Models\BaseModel;

/**
 * model\tp\poster\tp_poster
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string|null $poster_name 海报名称
 * @property int|null $canvas_width 画布宽度
 * @property int|null $canvas_height 画布高度
 * @property int|null $poster_width 海报宽度
 * @property int|null $poster_height 海报高度
 * @property string|null $back_url 海报路径
 * @property int|null $canvas_x 画布x轴
 * @property int|null $canvas_y 画布y轴
 * @property int|null $enabled 是否启用 ： 0 = 未启用，1 = 已启用
 * @property int|null $update_time 更新时间
 * @property int|null $add_time 添加时间
 * @property string|null $remark 备注
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereBackUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereCanvasHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereCanvasWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereCanvasX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereCanvasY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster wherePosterHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster wherePosterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster wherePosterWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\poster\tp_poster whereUpdateTime($value)
 * @mixin \Eloquent
 */
class tp_poster extends BaseModel
{
    protected $table = 'tp_poster';
    protected $primaryKey = 'id';
}