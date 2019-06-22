<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_store
 *
 * @method \think\db\Query tp()
 * @property int $storeid 店铺id
 * @property string $store_name 店铺名称
 * @property string $avatar 店铺头像
 * @property int $auditing 是否审核  0：待审核  1：审核通过  2：审核不通过
 * @property int|null $timeline 提示语设置时间
 * @property int $is_delete 是否删除  0：未删除 1：已删除
 * @property string $webid 网站域名
 * @property string $phone 企业电话
 * @property string $city 企业地址
 * @property string $email 企业邮箱
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereAuditing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereStoreid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereTimeline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_store whereWebid($value)
 * @mixin \Eloquent
 */
class tp_kf_store extends BaseModel
{
    protected $table = 'tp_kf_store';
    protected $primaryKey = 'storeid';
}