<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_distribution
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $user_id 分销会员id
 * @property string|null $user_name 会员昵称
 * @property int|null $goods_id 商品id
 * @property string|null $goods_name 商品名称
 * @property int|null $cat_id 商品分类ID
 * @property int|null $brand_id 商品品牌
 * @property int|null $share_num 分享次数
 * @property int|null $sales_num 分销销量
 * @property int|null $addtime 加入个人分销库时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereAddtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereSalesNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereShareNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_distribution whereUserName($value)
 * @mixin \Eloquent
 */
class tp_user_distribution extends BaseModel
{
    protected $table = 'tp_user_distribution';
    protected $primaryKey = 'id';
}