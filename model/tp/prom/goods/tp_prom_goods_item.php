<?php
namespace model\tp\prom\goods;
use App\Models\BaseModel;

/**
 * model\tp\prom\goods\tp_prom_goods_item
 *
 * @method \app\common\model\PromGoodsItem tp()
 * @property int $prom_id 活动id
 * @property int $goods_id 商品id
 * @property int $item_id 商品规格id
 * @property string $goods_name 商品名称
 * @property float $price 价格
 * @property string|null $image 商品图片
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\prom\goods\tp_prom_goods_item wherePromId($value)
 * @mixin \Eloquent
 */
class tp_prom_goods_item extends BaseModel
{
    protected $table = 'tp_prom_goods_item';
    protected $primaryKey = '';
}