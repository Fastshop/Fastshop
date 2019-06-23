<?php
namespace model\tp\reply;
use App\Models\BaseModel;

/**
 * model\tp\reply\tp_reply
 *
 * @method \think\db\Query tp()
 * @property int $reply_id 回复id
 * @property int $comment_id 评论id：关联评论表
 * @property int $parent_id 父类id，0为最顶级
 * @property string $content 回复内容
 * @property string $user_name 回复人的昵称
 * @property string $to_name 被回复人的昵称
 * @property int $deleted 未删除0；删除：1
 * @property int $reply_time 回复时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereReplyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereReplyTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereToName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\reply\tp_reply whereUserName($value)
 * @mixin \Eloquent
 */
class tp_reply extends BaseModel
{
    protected $table = 'tp_reply';
    protected $primaryKey = 'reply_id';
}