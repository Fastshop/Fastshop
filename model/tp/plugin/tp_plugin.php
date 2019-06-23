<?php
namespace model\tp\plugin;
use App\Models\BaseModel;

/**
 * model\tp\plugin\tp_plugin
 *
 * @method \app\common\model\plugin tp()
 * @property string|null $code 插件编码
 * @property string|null $name 中文名字
 * @property string|null $version 插件的版本
 * @property string|null $author 插件作者
 * @property string|null $config 配置信息
 * @property string|null $config_value 配置值信息
 * @property string|null $desc 插件描述
 * @property int|null $status 是否启用
 * @property string|null $type 插件类型 payment支付 login 登陆 shipping物流
 * @property string|null $icon 图标
 * @property string|null $bank_code 网银配置信息
 * @property int|null $scene 使用场景 0PC+手机 1手机 2PC 3APP 4小程序
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereConfigValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereScene($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\plugin\tp_plugin whereVersion($value)
 * @mixin \Eloquent
 */
class tp_plugin extends BaseModel
{
    protected $table = 'tp_plugin';
    protected $primaryKey = '';
}