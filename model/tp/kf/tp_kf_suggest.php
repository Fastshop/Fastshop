<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_suggest
 *
 * @method \think\db\Query tp()
 * @property int $id 客户意见反馈主键id
 * @property int $storeid 店铺id
 * @property string $kehuid 客户id
 * @property int $is_satisfied 满意度 0：很不满意  1：不满意 2：一般 3：满意 4：非常满意
 * @property string|null $suggest 建议
 * @property int|null $timeline 反馈时间
 * @property int $is_delete 是否删除  0：未删除   1：已删除
 * @property int $kefu_id 客服id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereIsSatisfied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereKefuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereKehuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereStoreid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereSuggest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_suggest whereTimeline($value)
 * @mixin \Eloquent
 */
class tp_kf_suggest extends BaseModel
{
    protected $table = 'tp_kf_suggest';
    protected $primaryKey = 'id';
}