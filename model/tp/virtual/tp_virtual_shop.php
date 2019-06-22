<?php
namespace model\tp\virtual;
use App\Models\BaseModel;

/**
 * model\tp\virtual\tp_virtual_shop
 *
 * @method \think\db\Query tp()
 * @property int|null $user_id
 * @property string|null $shop_name 店铺名称
 * @property int|null $shop_level 店铺等级
 * @property string|null $shop_intro 店铺介绍
 * @property string|null $shop_logo 店铺logo
 * @property string|null $shop_phone
 * @property string|null $shop_qq
 * @property int|null $shop_theme 店铺模板风格
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopIntro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopQq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereShopTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\virtual\tp_virtual_shop whereUserId($value)
 * @mixin \Eloquent
 */
class tp_virtual_shop extends BaseModel
{
    protected $table = 'tp_virtual_shop';
    protected $primaryKey = '';
}