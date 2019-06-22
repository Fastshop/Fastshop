<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_store
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property int $user_id 用户id
 * @property string|null $store_name 店铺名
 * @property string|null $true_name 真名
 * @property string $qq QQ
 * @property string $mobile 手机号码
 * @property string $store_img 店铺图片
 * @property int $store_time 开店时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereQq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereStoreImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereStoreTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereTrueName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_store whereUserId($value)
 * @mixin \Eloquent
 */
class tp_user_store extends BaseModel
{
    protected $table = 'tp_user_store';
    protected $primaryKey = 'id';
}