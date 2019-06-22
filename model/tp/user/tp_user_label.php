<?php
namespace model\tp\user;
use App\Models\BaseModel;

/**
 * model\tp\user\tp_user_label
 *
 * @method \app\common\model\UserLabel tp()
 * @property int $id 标签名称
 * @property string $label_name 标签名称
 * @property int $label_order 标签排序
 * @property string $label_code 标签图片
 * @property string|null $label_describe 标签描述
 * @property string $is_recommend 是否推荐:0=否,1=是
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label whereIsRecommend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label whereLabelCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label whereLabelDescribe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label whereLabelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\user\tp_user_label whereLabelOrder($value)
 * @mixin \Eloquent
 */
class tp_user_label extends BaseModel
{
    protected $table = 'tp_user_label';
    protected $primaryKey = 'id';
}