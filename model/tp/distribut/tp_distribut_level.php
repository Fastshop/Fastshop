<?php
namespace model\tp\distribut;
use App\Models\BaseModel;

/**
 * model\tp\distribut\tp_distribut_level
 *
 * @method \think\db\Query tp()
 * @property int $level_id
 * @property int|null $level_type 分销等级类别
 * @property float|null $rate1 一级佣金比例
 * @property float|null $rate2 二级佣金比例
 * @property float|null $rate3 三级佣金比例
 * @property float|null $order_money 升级条件
 * @property string $level_name
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereLevelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereLevelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereOrderMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereRate1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereRate2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\distribut\tp_distribut_level whereRate3($value)
 * @mixin \Eloquent
 */
class tp_distribut_level extends BaseModel
{
    protected $table = 'tp_distribut_level';
    protected $primaryKey = 'level_id';
}