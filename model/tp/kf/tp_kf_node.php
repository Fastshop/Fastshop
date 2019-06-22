<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_node
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $name 节点名称
 * @property string $title 菜单名称
 * @property int $status 是否激活 1：是 2：否
 * @property string|null $remark 备注说明
 * @property int $pid 父ID
 * @property int $level 节点等级
 * @property string|null $data 附加参数
 * @property int $sort 排序权重
 * @property int $display 菜单显示类型 0:不显示 1:导航菜单 2:左侧菜单
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_node whereTitle($value)
 * @mixin \Eloquent
 */
class tp_kf_node extends BaseModel
{
    protected $table = 'tp_kf_node';
    protected $primaryKey = 'id';
}