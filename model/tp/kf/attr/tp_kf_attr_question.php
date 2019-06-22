<?php
namespace model\tp\kf\attr;
use App\Models\BaseModel;

/**
 * model\tp\kf\attr\tp_kf_attr_question
 *
 * @method \think\db\Query tp()
 * @property int $id 主键id
 * @property string $name 问题分类名称
 * @property int $pid 父分类id
 * @property int $storeid 所属店铺id
 * @property int $add_time 添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\attr\tp_kf_attr_question whereStoreid($value)
 * @mixin \Eloquent
 */
class tp_kf_attr_question extends BaseModel
{
    protected $table = 'tp_kf_attr_question';
    protected $primaryKey = 'id';
}