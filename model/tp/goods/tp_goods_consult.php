<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_consult
 *
 * @method \app\common\model\GoodsConsult tp()
 * @property int $id 商品咨询id
 * @property int|null $goods_id 商品id
 * @property string|null $username 网名
 * @property int|null $add_time 咨询时间
 * @property int|null $consult_type 1 商品咨询 2 支付咨询 3 配送 4 售后
 * @property string|null $content 咨询内容
 * @property int|null $parent_id 父id 用于管理员回复
 * @property int|null $is_show 是否显示
 * @property int|null $status 管理员回复状态，0未回复，1已回复
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereConsultType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_consult whereUsername($value)
 * @mixin \Eloquent
 */
class tp_goods_consult extends BaseModel
{
    protected $table = 'tp_goods_consult';
    protected $primaryKey = 'id';
}