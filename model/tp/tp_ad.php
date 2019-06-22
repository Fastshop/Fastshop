<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_ad
 *
 * @method \think\db\Query tp()
 * @property int $ad_id 广告id
 * @property int $pid 广告位置ID
 * @property int $media_type 广告类型
 * @property string $ad_name 广告名称
 * @property string $ad_link 链接地址
 * @property string $ad_code 图片地址
 * @property int $start_time 投放时间
 * @property int $end_time 结束时间
 * @property string $link_man 添加人
 * @property string $link_email 添加人邮箱
 * @property string $link_phone 添加人联系电话
 * @property int $click_count 点击量
 * @property int $enabled 是否显示
 * @property int|null $orderby 排序
 * @property int|null $target 是否开启浏览器新窗口
 * @property string|null $bgcolor 背景颜色
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereAdCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereAdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereAdLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereAdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereBgcolor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereClickCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereLinkEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereLinkMan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereLinkPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereMediaType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereOrderby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_ad whereTarget($value)
 * @mixin \Eloquent
 */
class tp_ad extends BaseModel
{
    protected $table = 'tp_ad';
    protected $primaryKey = 'ad_id';
}