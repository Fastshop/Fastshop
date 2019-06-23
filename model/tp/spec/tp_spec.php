<?php
namespace model\tp\spec;
use App\Models\BaseModel;

/**
 * model\tp\spec\tp_spec
 *
 * @method \app\common\model\Spec tp()
 * @property int $id 规格表
 * @property int|null $type_id 规格类型
 * @property string|null $name 规格名称
 * @property int|null $order 排序
 * @property int $is_upload_image 是否可上传规格图.0不可，1可以
 * @property int|null $search_index 是否需要检索：1是，0否
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec whereIsUploadImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec whereSearchIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec whereTypeId($value)
 * @mixin \Eloquent
 */
class tp_spec extends BaseModel
{
    protected $table = 'tp_spec';
    protected $primaryKey = 'id';
}