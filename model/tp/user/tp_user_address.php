<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_address
 *
 * @method \app\common\model\UserAddress tp()
 * @property int $address_id 表id
 * @property int $user_id 用户id
 * @property string $consignee 收货人
 * @property string $email 邮箱地址
 * @property int $country 国家
 * @property int $province 省份
 * @property int $city 城市
 * @property int $district 地区
 * @property int|null $twon 乡镇
 * @property string $address 地址
 * @property string $zipcode 邮政编码
 * @property string $mobile 手机
 * @property int|null $is_default 默认收货地址
 * @property float $longitude 地址经度
 * @property float $latitude 地址纬度
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereConsignee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereTwon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_address whereZipcode($value)
 * @mixin \Eloquent
 */
class tp_user_address extends BaseModel
{
    protected $table = 'tp_user_address';
    protected $primaryKey = 'address_id';
}