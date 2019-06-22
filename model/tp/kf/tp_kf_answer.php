<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_answer
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $que_id 问题id
 * @property string $content 内容
 * @property int $add_time 添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_answer whereQueId($value)
 * @mixin \Eloquent
 */
class tp_kf_answer extends BaseModel
{
    protected $table = 'tp_kf_answer';
    protected $primaryKey = 'id';
}