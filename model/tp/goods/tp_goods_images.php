<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_images
 *
 * @method \app\common\model\GoodsImages tp()
 * @property int $img_id 图片id 自增
 * @property int $goods_id 商品id
 * @property string $image_url 图片地址
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_images newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_images newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_images query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_images whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_images whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_images whereImgId($value)
 * @mixin \Eloquent
 */
class tp_goods_images extends BaseModel
{
    protected $table = 'tp_goods_images';
    protected $primaryKey = 'img_id';
}