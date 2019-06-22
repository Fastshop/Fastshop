<?php
namespace model\tp\friend;
use App\Models\BaseModel;

/**
 * model\tp\friend\tp_friend_link
 *
 * @method \think\db\Query tp()
 * @property int $link_id 表id
 * @property string $link_name 链接名称
 * @property string $link_url 链接地址
 * @property string $link_logo 链接logo
 * @property int $orderby 排序
 * @property int|null $is_show 是否显示
 * @property int|null $target 是否新窗口打开
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereIsShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereLinkLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereLinkName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereLinkUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereOrderby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\friend\tp_friend_link whereTarget($value)
 * @mixin \Eloquent
 */
class tp_friend_link extends BaseModel
{
    protected $table = 'tp_friend_link';
    protected $primaryKey = 'link_id';
}