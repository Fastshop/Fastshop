<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_slogan
 *
 * @method \think\db\Query tp()
 * @property int $id 提示语id主键
 * @property string|null $slogan 标语（客服加载欢迎语）
 * @property int|null $slogan_status 提示语状态  0：不开启  1：开启
 * @property int $auditing 是否审核提示语  0：待审核  1：审核通过  2：审核不通过
 * @property int|null $timeline 提示语设置时间
 * @property int $storeid 提示语所属店铺id
 * @property int $is_delete 是否删除  0：未删除 1：已删除
 * @property int $kefuid 客服id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereAuditing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereKefuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereSloganStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereStoreid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_slogan whereTimeline($value)
 * @mixin \Eloquent
 */
class tp_kf_slogan extends BaseModel
{
    protected $table = 'tp_kf_slogan';
    protected $primaryKey = 'id';
}