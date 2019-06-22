<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_keyword
 *
 * @method \app\common\model\WxKeyword tp()
 * @property int $id 微信关键词表
 * @property string $keyword
 * @property int $pid 对应表ID，如wx_reply的id
 * @property string $type 关键词操作类型 auto_reply
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_keyword whereType($value)
 * @mixin \Eloquent
 */
class tp_wx_keyword extends BaseModel
{
    protected $table = 'tp_wx_keyword';
    protected $primaryKey = 'id';
}