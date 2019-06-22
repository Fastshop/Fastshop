<?php
namespace model\tp\shopper;
use App\Models\BaseModel;

/**
 * model\tp\shopper\tp_shopper_log
 *
 * @method \think\db\Query tp()
 * @property int $log_id 日志编号
 * @property string $log_content 日志内容
 * @property int $log_time 日志时间
 * @property int $log_shopper_id 卖家编号
 * @property string $log_shopper_name 门店帐号
 * @property int $log_shop_id 门店id
 * @property string $log_shopper_ip 门店ip
 * @property string $log_url 日志url
 * @property int $log_state 日志状态(0-失败 1-成功)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogShopperId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogShopperIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogShopperName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\shopper\tp_shopper_log whereLogUrl($value)
 * @mixin \Eloquent
 */
class tp_shopper_log extends BaseModel
{
    protected $table = 'tp_shopper_log';
    protected $primaryKey = 'log_id';
}