<?php
namespace model\migrations;
use App\Models\BaseModel;

/**
 * model\migrations\migrations
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $migration
 * @property int $batch
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations\migrations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations\migrations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations\migrations query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations\migrations whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations\migrations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations\migrations whereMigration($value)
 * @mixin \Eloquent
 */
class migrations extends BaseModel
{
    protected $table = 'migrations';
    protected $primaryKey = 'id';
}