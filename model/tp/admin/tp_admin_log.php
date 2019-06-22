<?php
namespace model\tp\admin;
use App\Models\BaseModel;

/**
 * model\tp\admin\tp_admin_log
 *
 * @method \think\db\Query tp()
 * @property int $log_id 表id
 * @property int|null $admin_id 管理员id
 * @property string|null $log_info 日志描述
 * @property string|null $log_ip ip地址
 * @property string|null $log_url url
 * @property int|null $log_time 日志时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log whereLogInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log whereLogIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log whereLogTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\admin\tp_admin_log whereLogUrl($value)
 * @mixin \Eloquent
 */
class tp_admin_log extends BaseModel
{
    protected $table = 'tp_admin_log';
    protected $primaryKey = 'log_id';
}