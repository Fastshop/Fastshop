<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_admin
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $login_name
 * @property string $password
 * @property int $role 组ID
 * @property int $status 状态 1:启用 0:禁止
 * @property string|null $remark 备注说明
 * @property int $last_login_time 最后登录时间
 * @property string|null $last_login_ip 最后登录IP
 * @property string|null $last_location 最后登录位置
 * @property int $storeid 企业id（店铺id）
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereLastLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereLastLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereLoginName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_admin whereStoreid($value)
 * @mixin \Eloquent
 */
class tp_kf_admin extends BaseModel
{
    protected $table = 'tp_kf_admin';
    protected $primaryKey = 'id';
}