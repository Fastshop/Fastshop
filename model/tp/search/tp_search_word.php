<?php
namespace model\tp\search;
use App\Models\BaseModel;

/**
 * model\tp\search\tp_search_word
 *
 * @method \think\db\Query tp()
 * @property int $id 搜索表ID
 * @property string $keywords 搜索关键词，商品关键词
 * @property string $pinyin_full 拼音全拼
 * @property string $pinyin_simple 拼音简写
 * @property int $search_num 搜索次数
 * @property int $goods_num 商品数量
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word wherePinyinFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word wherePinyinSimple($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\tp\search\tp_search_word whereSearchNum($value)
 * @mixin \Eloquent
 */
class tp_search_word extends BaseModel
{
    protected $table = 'tp_search_word';
    protected $primaryKey = 'id';
}