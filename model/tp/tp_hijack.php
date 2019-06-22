<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_hijack
 *
 * @method \think\db\Query tp()
 * @property int $id 自增ID
 * @property string|null $hijack_url 劫持URL
 * @property string|null $page_url 发生页面url
 * @property int $add_time 创建时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack whereAddTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack whereHijackUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_hijack wherePageUrl($value)
 * @mixin \Eloquent
 */
class tp_hijack extends BaseModel
{
    protected $table = 'tp_hijack';
    protected $primaryKey = 'id';
}