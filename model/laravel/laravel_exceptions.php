<?php
namespace model\laravel;
use App\Models\BaseModel;

/**
 * model\laravel\laravel_exceptions
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property string $type
 * @property string $code
 * @property string $message
 * @property string $file
 * @property int $line
 * @property string $trace
 * @property string $method
 * @property string $path
 * @property string $query
 * @property string $body
 * @property string $cookies
 * @property string $headers
 * @property string $ip
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereCookies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereHeaders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereQuery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereTrace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\laravel\laravel_exceptions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class laravel_exceptions extends BaseModel
{
    protected $table = 'laravel_exceptions';
    protected $primaryKey = 'id';
}