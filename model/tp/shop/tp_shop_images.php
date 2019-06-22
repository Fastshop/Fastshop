<?php
namespace model\tp\shop;
use App\Models\BaseModel;

/**
 * model\tp\shop\tp_shop_images
 *
 * @method \app\common\model\ShopImages tp()
 * @property int $shop_id 门店id
 * @property string $image_url 图片地址
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_images newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_images newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_images query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_images whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shop\tp_shop_images whereShopId($value)
 * @mixin \Eloquent
 */
class tp_shop_images extends BaseModel
{
    protected $table = 'tp_shop_images';
    protected $primaryKey = '';
}