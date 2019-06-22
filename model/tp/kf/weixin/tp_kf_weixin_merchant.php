<?php
namespace model\tp\kf\weixin;
use App\Models\BaseModel;

/**
 * model\tp\kf\weixin\tp_kf_weixin_merchant
 *
 * @method \think\db\Query tp()
 * @property int $id 联关v1_store表主键
 * @property int|null $storeid
 * @property int|null $wx_type 众公号类型
 * @property string|null $wx_url
 * @property string|null $wx_token
 * @property string|null $wx_EncodingAESKey 消息加密密钥
 * @property string|null $wx_raw_id 微信原始ID
 * @property string|null $wx_AppId
 * @property string|null $wx_AppSecret
 * @property int|null $wx_Random 是否随机回复
 * @property string|null $wx_Subscribe 关注后的回复
 * @property string|null $wx_NoneReply 无匹配时的回复
 * @property string|null $media_id 关注回复
 * @property string|null $media_id2 无匹配回复
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereMediaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereMediaId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereStoreid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxAppSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxEncodingAESKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxNoneReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxRandom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxRawId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxSubscribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\kf\weixin\tp_kf_weixin_merchant whereWxUrl($value)
 * @mixin \Eloquent
 */
class tp_kf_weixin_merchant extends BaseModel
{
    protected $table = 'tp_kf_weixin_merchant';
    protected $primaryKey = 'id';
}