<?php
namespace model\tp\team\goods;
use App\Models\BaseModel;

/**
 * model\tp\team\goods\tp_team_goods_item
 *
 * @method \app\common\model\TeamGoodsItem tp()
 * @property int $team_id
 * @property int $goods_id 商品ID
 * @property int $item_id 商品规格ID
 * @property float $team_price 拼团价
 * @property int $sales_sum 已拼多少件
 * @property int $deleted 是否已删除0否，1删除
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item whereSalesSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\goods\tp_team_goods_item whereTeamPrice($value)
 * @mixin \Eloquent
 */
class tp_team_goods_item extends BaseModel
{
    protected $table = 'tp_team_goods_item';
    protected $primaryKey = '';
}