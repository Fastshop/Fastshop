<?php
namespace model\tp\storage;
use App\Models\BaseModel;

/**
 * model\tp\storage\tp_storage
 *
 * @method \think\db\Query tp()
 * @property int $storage_id
 * @property string $storage_name 仓储名称
 * @property int|null $is_open 仓储是否启用  0不启用  1启用
 * @property int $province_id 省id
 * @property int $city_id 市id
 * @property int $district_id 区id
 * @property string $address 仓储详细地址
 * @property string $name 仓储负责人姓名
 * @property string $mobile 仓储负责人联系电话
 * @property int $capacity 仓储容量(前台取用单位立方米)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereStorageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\storage\tp_storage whereStorageName($value)
 * @mixin \Eloquent
 */
class tp_storage extends BaseModel
{
    protected $table = 'tp_storage';
    protected $primaryKey = 'storage_id';
}