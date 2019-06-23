<?php
namespace model\tp\comment;
use App\Models\BaseModel;

/**
 * model\tp\comment\tp_comment
 *
 * @method \think\db\Query tp()
 * @property int $comment_id 评论id
 * @property int $goods_id 商品id
 * @property string $email email邮箱
 * @property string $username 用户名
 * @property string $content 评论内容
 * @property int $add_time 添加时间
 * @property string $ip_address ip地址
 * @property int $is_show 是否显示
 * @property int $parent_id 父id
 * @property int $user_id 评论用户
 * @property string|null $img 晒单图片
 * @property int|null $order_id 订单id
 * @property int $deliver_rank 物流评价等级
 * @property int|null $goods_rank 商品评价等级
 * @property int|null $service_rank 商家服务态度评价等级
 * @property int $zan_num 被赞数
 * @property string $zan_userid 点赞用户id
 * @property int $is_anonymous 是否匿名评价:0不是，1是
 * @property int|null $rec_id 订单商品表ID
 * @property int $sort 排序
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereDeliverRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereGoodsRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereIsAnonymous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereRecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereServiceRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereZanNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\comment\tp_comment whereZanUserid($value)
 * @mixin \Eloquent
 */
class tp_comment extends BaseModel
{
    protected $table = 'tp_comment';
    protected $primaryKey = 'comment_id';
}