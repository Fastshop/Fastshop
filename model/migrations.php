<?php
namespace model;
use App\Models\BaseModel;

/**
 * model\migrations
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $migration
 * @property int $batch
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\migrations whereMigration($value)
 * @mixin \Eloquent
 */
class migrations extends BaseModel
{
    protected $table = 'migrations';
    protected $primaryKey = 'id';
}