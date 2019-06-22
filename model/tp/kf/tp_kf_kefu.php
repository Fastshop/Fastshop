<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_kefu
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string|null $user_name
 * @property string|null $pwd 密码
 * @property string|null $sign
 * @property string|null $avatar
 * @property int|null $status 0下线 1在线
 * @property int $storeid 店铺id，默认1
 * @property int $Auditing 是否审核  0：待审核  1：审核通过  2：审核不通过
 * @property string $store_name 客服所属店铺名称
 * @property int $is_delete 是否删除  0：未删除 1：已删除
 * @property int $role 组ID
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereAuditing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu wherePwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereStoreid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_kefu whereUserName($value)
 * @mixin \Eloquent
 */
class tp_kf_kefu extends BaseModel
{
    protected $table = 'tp_kf_kefu';
    protected $primaryKey = 'id';
}