<?php
namespace model\tp\team;
use App\Models\BaseModel;

/**
 * model\tp\team\tp_team_lottery
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int|null $user_id 幸运儿手机
 * @property int|null $order_id 订单id
 * @property string|null $order_sn
 * @property string|null $mobile 幸运儿手机
 * @property int|null $team_id 拼团活动ID
 * @property string|null $nickname 会员昵称
 * @property string|null $head_pic 幸运儿头像
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereHeadPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereOrderSn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_lottery whereUserId($value)
 * @mixin \Eloquent
 */
class tp_team_lottery extends BaseModel
{
    protected $table = 'tp_team_lottery';
    protected $primaryKey = 'id';
}