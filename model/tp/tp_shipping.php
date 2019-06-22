<?php
namespace model\tp;
use App\Models\BaseModel;

/**
 * model\tp\tp_shipping
 *
 * @method \app\common\model\Shipping tp()
 * @property int $shipping_id 物流公司id
 * @property string $shipping_name 物流公司名称
 * @property string $shipping_code 物流公司编码
 * @property int|null $is_open 是否启用
 * @property string $shipping_desc 物流描述
 * @property string $shipping_logo 物流公司logo
 * @property int $template_width 运单模板宽度
 * @property int $template_height 运单模板高度
 * @property int $template_offset_x 运单模板左偏移量
 * @property int $template_offset_y 运单模板上偏移量
 * @property string $template_img 运单模板图片
 * @property string $template_html 打印项偏移校正
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereShippingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereShippingDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereShippingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereShippingLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereShippingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereTemplateHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereTemplateHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereTemplateImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereTemplateOffsetX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereTemplateOffsetY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\tp_shipping whereTemplateWidth($value)
 * @mixin \Eloquent
 */
class tp_shipping extends BaseModel
{
    protected $table = 'tp_shipping';
    protected $primaryKey = 'shipping_id';
}