<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_suppliers
 *
 * @method \app\common\model\Suppliers tp()
 * @property int $suppliers_id 供应商ID
 * @property string $suppliers_name 供应商名称
 * @property string $suppliers_desc 供应商描述
 * @property int $is_check 供应商状态
 * @property string $suppliers_contacts 供应商联系人
 * @property string $suppliers_phone 供应商电话
 * @property int|null $province_id 所在省份id
 * @property int|null $city_id 所在城市id
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereIsCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereSuppliersContacts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereSuppliersDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereSuppliersId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereSuppliersName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_suppliers whereSuppliersPhone($value)
 * @mixin \Eloquent
 */
class tp_suppliers extends BaseModel
{
    protected $table = 'tp_suppliers';
    protected $primaryKey = 'suppliers_id';
}