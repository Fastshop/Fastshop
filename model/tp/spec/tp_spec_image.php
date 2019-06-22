<?php
namespace model\tp\spec;
use App\Models\BaseModel;

/**
 * model\tp\spec\tp_spec_image
 *
 * @method \app\common\model\SpecImage tp()
 * @property int|null $goods_id 商品规格图片表id
 * @property int|null $spec_image_id 规格项id
 * @property string|null $src 商品规格图片路径
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_image query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_image whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_image whereSpecImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\spec\tp_spec_image whereSrc($value)
 * @mixin \Eloquent
 */
class tp_spec_image extends BaseModel
{
    protected $table = 'tp_spec_image';
    protected $primaryKey = '';
}