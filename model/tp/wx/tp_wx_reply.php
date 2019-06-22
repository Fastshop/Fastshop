<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_reply
 *
 * @method \app\common\model\WxReply tp()
 * @property int $id 微信关键词回复表
 * @property string|null $rule 规则名
 * @property int|null $update_time
 * @property string|null $type 回复类型keyword,default,follow
 * @property string|null $msg_type 回复消息类型text,news
 * @property string|null $data text使用该自动存储文本
 * @property int|null $material_id news、image的素材id等
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereMsgType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereRule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_reply whereUpdateTime($value)
 * @mixin \Eloquent
 */
class tp_wx_reply extends BaseModel
{
    protected $table = 'tp_wx_reply';
    protected $primaryKey = 'id';
}