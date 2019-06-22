<?php
namespace model\tp\team;
use App\Models\BaseModel;

/**
 * model\tp\team\tp_team_follow
 *
 * @method \app\common\model\TeamFollow tp()
 * @property int $follow_id
 * @property int|null $follow_user_id 参团会员id
 * @property string|null $follow_user_nickname 参团会员昵称
 * @property string|null $follow_user_head_pic 会员头像
 * @property int|null $follow_time 参团时间
 * @property int|null $order_id 订单id
 * @property int|null $found_id 开团ID
 * @property int|null $found_user_id 开团人user_id
 * @property int|null $team_id 拼团活动id
 * @property int|null $status 参团状态0:待拼单(表示已下单但是未支付)1拼单成功(已支付)2成团成功3成团失败
 * @property int|null $is_win 抽奖团是否中奖
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFollowId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFollowTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFollowUserHeadPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFollowUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFollowUserNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFoundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereFoundUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereIsWin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_follow whereTeamId($value)
 * @mixin \Eloquent
 */
class tp_team_follow extends BaseModel
{
    protected $table = 'tp_team_follow';
    protected $primaryKey = 'follow_id';
}