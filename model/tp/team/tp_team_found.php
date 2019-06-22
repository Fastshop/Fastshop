<?php
namespace model\tp\team;
use App\Models\BaseModel;

/**
 * model\tp\team\tp_team_found
 *
 * @method \app\common\model\TeamFound tp()
 * @property int $found_id
 * @property int|null $found_time 开团时间
 * @property int|null $found_end_time 成团截止时间
 * @property int|null $user_id 团长id
 * @property int|null $team_id 拼团活动id
 * @property string|null $nickname 团长用户名昵称
 * @property string|null $head_pic 团长头像
 * @property int|null $order_id 团长订单id
 * @property int|null $join 已参团人数
 * @property int|null $need 需多少人成团
 * @property float|null $price 拼团价格
 * @property float|null $goods_price 商品原价
 * @property int|null $status 拼团状态0:待开团(表示已下单但是未支付)1:已经开团(团长已支付)2:拼团成功,3拼团失败
 * @property int|null $bonus_status 团长佣金领取状态：0无1领取
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereBonusStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereFoundEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereFoundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereFoundTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereHeadPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereJoin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereNeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_found whereUserId($value)
 * @mixin \Eloquent
 */
class tp_team_found extends BaseModel
{
    protected $table = 'tp_team_found';
    protected $primaryKey = 'found_id';
}