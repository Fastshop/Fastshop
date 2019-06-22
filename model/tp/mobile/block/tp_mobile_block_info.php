<?php
namespace model\tp\mobile\block;
use App\Models\BaseModel;

/**
 * model\tp\mobile\block\tp_mobile_block_info
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $block_id 所属板块id
 * @property int $block_type 板块类型
 * @property string|null $title 标题、描述、文字内容
 * @property string|null $block_content 其它信息
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info whereBlockContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info whereBlockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info whereBlockType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\mobile\block\tp_mobile_block_info whereTitle($value)
 * @mixin \Eloquent
 */
class tp_mobile_block_info extends BaseModel
{
    protected $table = 'tp_mobile_block_info';
    protected $primaryKey = 'id';
}