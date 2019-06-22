<?php
namespace model\tp\system;
use App\Models\BaseModel;

/**
 * model\tp\system\tp_system_article
 *
 * @method \think\db\Query tp()
 * @property int $doc_id id
 * @property string $doc_code 调用标识码
 * @property string $doc_title 标题
 * @property string $doc_content 内容
 * @property int $doc_time 添加时间/修改时间
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article whereDocCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article whereDocContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article whereDocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article whereDocTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\system\tp_system_article whereDocTitle($value)
 * @mixin \Eloquent
 */
class tp_system_article extends BaseModel
{
    protected $table = 'tp_system_article';
    protected $primaryKey = 'doc_id';
}