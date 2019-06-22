<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_coupon
 *
 * @method \app\common\model\GoodsCoupon tp()
 * @property int $coupon_id 优惠券id
 * @property int $goods_id 指定的商品id：为零表示不指定商品
 * @property int $goods_category_id 指定的商品分类：为零表示不指定分类
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_coupon whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_coupon whereGoodsCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_coupon whereGoodsId($value)
 * @mixin \Eloquent
 */
class tp_goods_coupon extends BaseModel
{
    protected $table = 'tp_goods_coupon';
    protected $primaryKey = 'coupon_id';
}