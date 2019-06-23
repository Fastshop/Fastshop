<?php
namespace model\tp\shopper;
use App\Models\BaseModel;

/**
 * model\tp\shopper\tp_shopper
 *
 * @method \app\common\model\Shopper tp()
 * @property int $shopper_id 门店id
 * @property string $shopper_name 门店账号
 * @property int $user_id 用户ID
 * @property int $shop_id 门店Id
 * @property int $last_login_time 最后登录时间
 * @property int|null $add_time 添加时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper whereLastLoginTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper whereShopperId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper whereShopperName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper whereUserId($value)
 * @mixin \Eloquent
 */
class tp_shopper extends BaseModel
{
    protected $table = 'tp_shopper';
    protected $primaryKey = 'shopper_id';
}