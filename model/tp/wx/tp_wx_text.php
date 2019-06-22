<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_text
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property int $uid 用户id
 * @property string $uname 用户名
 * @property string $keyword 关键词
 * @property int $precisions precisions
 * @property string $text text
 * @property string $createtime 创建时间
 * @property string $updatetime 更新时间
 * @property int $click 点击
 * @property string $token token
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereCreatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text wherePrecisions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereUname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_text whereUpdatetime($value)
 * @mixin \Eloquent
 */
class tp_wx_text extends BaseModel
{
    protected $table = 'tp_wx_text';
    protected $primaryKey = 'id';
}