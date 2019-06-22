<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_question
 *
 * @method \think\db\Query tp()
 * @property int $id id
 * @property string $name 名称
 * @property string|null $link 连接
 * @property int $add_time 添加时间
 * @property int $status 是否启用 0 ：不启用  1：启用
 * @property int $pid 父级id
 * @property int $storeid 店铺id
 * @property int $is_host 是否热门  0：否 1：是
 * @property int $is_common 是否常见 0：否 1：是
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereIsCommon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereIsHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_question whereStoreid($value)
 * @mixin \Eloquent
 */
class tp_kf_question extends BaseModel
{
    protected $table = 'tp_kf_question';
    protected $primaryKey = 'id';
}