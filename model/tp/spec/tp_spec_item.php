<?php
namespace model\tp\spec;
use App\Models\BaseModel;

/**
 * model\tp\spec\tp_spec_item
 *
 * @method \app\common\model\SpecItem tp()
 * @property int $id 规格项id
 * @property int|null $spec_id 规格id
 * @property string|null $item 规格项
 * @property int $order_index 排序
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item whereOrderIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_item whereSpecId($value)
 * @mixin \Eloquent
 */
class tp_spec_item extends BaseModel
{
    protected $table = 'tp_spec_item';
    protected $primaryKey = 'id';
}