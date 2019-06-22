<?php
namespace model\tp\distribut;
use App\Models\BaseModel;

/**
 * model\tp\distribut\tp_distribut_goods
 *
 * @method \think\db\Query tp()
 * @property int|null $user_id
 * @property int|null $goods_id
 * @property string|null $goods_name 商品名称
 * @property float|null $goods_price 商品价格
 * @property int|null $sales 销量
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods whereSales($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_goods whereUserId($value)
 * @mixin \Eloquent
 */
class tp_distribut_goods extends BaseModel
{
    protected $table = 'tp_distribut_goods';
    protected $primaryKey = '';
}