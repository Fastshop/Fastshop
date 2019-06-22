<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_material
 *
 * @method \app\common\model\WxMaterial tp()
 * @property int $id 微信公众号素材
 * @property string|null $media_id 微信媒体id
 * @property string $type 素材类型：text、image、news、video
 * @property string|null $data json数据
 * @property int|null $update_time 更新时间
 * @property string|null $key 便于查询的key，现用于image
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material whereMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_material whereUpdateTime($value)
 * @mixin \Eloquent
 */
class tp_wx_material extends BaseModel
{
    protected $table = 'tp_wx_material';
    protected $primaryKey = 'id';
}