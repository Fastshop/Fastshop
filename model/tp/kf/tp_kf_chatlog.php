<?php
namespace model\tp\kf;
use App\Models\BaseModel;

/**
 * model\tp\kf\tp_kf_chatlog
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $from_id 网页用户随机编号(仅为记录参考记录)
 * @property string $kefu_id 客服的id
 * @property string $content 发送的内容
 * @property int $timeline 记录时间
 * @property int $is_delete 是否删除  0：未删除 1：已删除
 * @property int|null $need_send 0 不需要推送 1 需要推送
 * @property string $from_name 消息来源用户名
 * @property string $to_name 接收消息用户名
 * @property int $storeid 店铺id
 * @property string $store_name 客服所属店铺名称
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereFromId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereFromName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereIsDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereKefuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereNeedSend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereStoreid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereTimeline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\tp_kf_chatlog whereToName($value)
 * @mixin \Eloquent
 */
class tp_kf_chatlog extends BaseModel
{
    protected $table = 'tp_kf_chatlog';
    protected $primaryKey = 'id';
}