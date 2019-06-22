<?php
namespace model\tp\team;
use App\Models\BaseModel;

/**
 * model\tp\team\tp_team_activity
 *
 * @method \app\common\model\TeamActivity tp()
 * @property int $team_id
 * @property string $act_name 拼团活动标题
 * @property int $team_type 拼团活动类型,0分享团1佣金团2抽奖团
 * @property int $time_limit 成团有效期。单位（秒)
 * @property int $needer 需要成团人数
 * @property string $goods_name 商品名称
 * @property int $goods_id 商品id
 * @property float $bonus 团长佣金
 * @property int $stock_limit 抽奖限量
 * @property int $buy_limit 单次团购买限制数0为不限制
 * @property int $sales_sum 已拼多少件
 * @property int $virtual_num 虚拟销售基数
 * @property string $share_title 分享标题
 * @property string $share_desc 分享描述
 * @property string|null $share_img 分享图片
 * @property int $sort 排序
 * @property int $is_recommend 是否推荐
 * @property int $status 0关闭1正常
 * @property int $is_lottery 是否已经抽奖.1是，0否
 * @property int $deleted 是否已删除0否，1删除
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereActName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereBuyLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereIsLottery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereIsRecommend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereNeeder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereSalesSum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereShareDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereShareImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereShareTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereStockLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereTeamType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereTimeLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\team\tp_team_activity whereVirtualNum($value)
 * @mixin \Eloquent
 */
class tp_team_activity extends BaseModel
{
    protected $table = 'tp_team_activity';
    protected $primaryKey = 'team_id';
}