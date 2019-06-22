<?php
namespace model\tp\goods;
use App\Models\BaseModel;

/**
 * model\tp\goods\tp_goods_activity
 *
 * @method \think\db\Query tp()
 * @property int $act_id 活动ID
 * @property string $act_name 活动名称
 * @property string $act_desc 活动描述
 * @property int $act_type 活动类型:1预售2拼团
 * @property int $goods_id 参加活动商品ID
 * @property int $spec_id 商品规格ID
 * @property string $goods_name 商品名称
 * @property int $start_time 活动开始时间
 * @property int $end_time 活动结束时间
 * @property int $is_finished 是否已结束:0,正常；1,成功结束；2，失败结束。
 * @property string $ext_info 活动扩展配置
 * @property int $act_count 商品购买数
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereActCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereActDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereActId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereActName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereActType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereExtInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereIsFinished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereSpecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\goods\tp_goods_activity whereStartTime($value)
 * @mixin \Eloquent
 */
class tp_goods_activity extends BaseModel
{
    protected $table = 'tp_goods_activity';
    protected $primaryKey = 'act_id';
}