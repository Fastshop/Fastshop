<?php
namespace model\tp\shop;
use App\Models\BaseModel;

/**
 * model\tp\shop\tp_shop
 *
 * @method \app\common\model\Shop tp()
 * @property int $shop_id 门店索引id
 * @property string $shop_name 门店名称
 * @property int $user_id 会员id
 * @property string $user_name 会员名称
 * @property string $shopper_name 店主卖家用户名
 * @property int $province_id 门店所在省份ID
 * @property int $city_id 门店所在城市ID
 * @property int $district_id 门店所在地区ID
 * @property string $shop_address 详细地区
 * @property float $longitude 门店地址经度
 * @property float $latitude 门店地址纬度
 * @property string $shop_zip 邮政编码
 * @property int $suppliers_id 供应商id，0表示没有
 * @property int $shop_status 门店状态，0关闭，1开启
 * @property string $work_start_time 每天营业起始时间
 * @property string $work_end_time 每天营业截止时间
 * @property int $add_time 开店时间
 * @property string $shop_phone_code 联系电话区号
 * @property string $shop_phone 商家电话
 * @property int $monday 星期一是否营业,0不是,1是
 * @property int $tuesday 星期二是否营业，0不是1是
 * @property int $wednesday 星期三是否营业，0不是1是
 * @property int $thursday 星期四是否营业，0不是1是
 * @property int $friday 星期五是否营业，0不是1是
 * @property int $saturday 星期六是否营业，0不是1是
 * @property int $sunday 星期日是否营业，0不是1是
 * @property int $deleted 未删除0，已删除1
 * @property string $shop_desc
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereFriday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereMonday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereSaturday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopPhoneCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereShopperName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereSunday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereSuppliersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereThursday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereTuesday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereWednesday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereWorkEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop whereWorkStartTime($value)
 * @mixin \Eloquent
 */
class tp_shop extends BaseModel
{
    protected $table = 'tp_shop';
    protected $primaryKey = 'shop_id';
}