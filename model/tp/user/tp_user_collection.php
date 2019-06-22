<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_collection
 *
 * @method \think\db\Query tp()
 * @property int $id 用户下载收集表
 * @property string|null $mobile 用户手机号
 * @property string|null $contact 联系人
 * @property string|null $why_down 下载原因
 * @property int|null $add_time 申请时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_collection whereWhyDown($value)
 * @mixin \Eloquent
 */
class tp_user_collection extends BaseModel
{
    protected $table = 'tp_user_collection';
    protected $primaryKey = 'id';
}