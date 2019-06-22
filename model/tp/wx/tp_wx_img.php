<?php
namespace model\tp\wx;
use App\Models\BaseModel;

/**
 * model\tp\wx\tp_wx_img
 *
 * @method \think\db\Query tp()
 * @property int $id 表id
 * @property string $keyword 关键词
 * @property string $desc 简介
 * @property string $pic 封面图片
 * @property string $url 图文外链地址
 * @property string $createtime 创建时间
 * @property string $uptatetime 更新时间
 * @property string $token token
 * @property string $title 标题
 * @property int $goods_id 商品id
 * @property string|null $goods_name 商品名称
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereCreatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereUptatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\wx\tp_wx_img whereUrl($value)
 * @mixin \Eloquent
 */
class tp_wx_img extends BaseModel
{
    protected $table = 'tp_wx_img';
    protected $primaryKey = 'id';
}