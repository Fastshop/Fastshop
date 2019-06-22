<?php
namespace model\tp\pick;
use App\Models\BaseModel;

/**
 * model\tp\pick\tp_pick_up
 *
 * @method \think\db\Query tp()
 * @property int $pickup_id 自提点id
 * @property string $pickup_name 自提点名称
 * @property string|null $pickup_pic 门店头像
 * @property string|null $pickup_details 门店简介
 * @property string $pickup_address 自提点地址
 * @property string $pickup_phone 自提点电话
 * @property string $pickup_contact 自提点联系人
 * @property int $province_id 省id
 * @property int $city_id 市id
 * @property int $district_id 区id
 * @property float|null $longitude 经度
 * @property float|null $latitude 纬度
 * @property int|null $open 营业开始时间
 * @property int|null $close 营业打烊时间
 * @property int $suppliersid 供应商id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereClose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up wherePickupPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\pick\tp_pick_up whereSuppliersid($value)
 * @mixin \Eloquent
 */
class tp_pick_up extends BaseModel
{
    protected $table = 'tp_pick_up';
    protected $primaryKey = 'pickup_id';
}