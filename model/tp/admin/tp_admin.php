<?php
namespace model\tp\admin;
use App\Models\BaseModel;

/**
 * model\tp\admin\tp_admin
 *
 * @method \think\db\Query tp()
 * @property int $admin_id 用户id
 * @property string $user_name 用户名
 * @property string $email email
 * @property string $password 密码
 * @property string|null $ec_salt 秘钥
 * @property int $add_time 添加时间
 * @property int $last_login 最后登录时间
 * @property string $last_ip 最后登录ip
 * @property string|null $nav_list 权限
 * @property string $lang_type lang_type
 * @property int $agency_id agency_id
 * @property int|null $suppliers_id suppliers_id
 * @property string|null $todolist todolist
 * @property int|null $role_id 角色id
 * @property int|null $province_id 加盟商省级id
 * @property int|null $city_id 加盟商市级id
 * @property int|null $district_id 加盟商区级id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereAgencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereEcSalt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereLangType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereLastIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereNavList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereSuppliersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereTodolist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin whereUserName($value)
 * @mixin \Eloquent
 */
class tp_admin extends BaseModel
{
    protected $table = 'tp_admin';
    protected $primaryKey = 'admin_id';
}