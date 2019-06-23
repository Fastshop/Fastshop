<?php
namespace model\admin;

use App\Models\BaseModel;
use DB;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * model\admin\admin_menu
 *
 * @method \think\db\Query tp()
 * @property int $id
 * @property int $parent_id
 * @property int $order
 * @property string $title
 * @property string $icon
 * @property string|null $uri
 * @property string|null $permission
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereUri($value)
 * @mixin \Eloquent
 * @property array|null $extra 扩展设置
 * @property-read \Illuminate\Database\Eloquent\Collection|\model\admin\admin_menu[] $children
 * @property-read \model\admin\admin_menu $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Encore\Admin\Auth\Database\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\model\admin\admin_menu whereExtra($value)
 */
class admin_menu extends BaseModel {

    protected $table = 'admin_menu';
    protected $primaryKey = 'id';
    protected $casts = [
        'extra' => 'json',
    ];
    use AdminBuilder, ModelTree {
        ModelTree::boot as treeBoot;
    }
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['parent_id', 'order', 'title', 'icon', 'uri', 'permission', 'extra'];

    /**
     * Create a new Eloquent model instance.
     * @param array $attributes
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(array $attributes = [])
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('admin.database.menu_table'));

        parent::__construct($attributes);
    }

    /**
     * A Menu belongs to many roles.
     * @return BelongsToMany
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function roles(): BelongsToMany
    {
        $pivotTable = config('admin.database.role_menu_table');

        $relatedModel = config('admin.database.roles_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'menu_id', 'role_id');
    }

    /**
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function allNodes(): array
    {
        $connection = config('admin.database.connection') ?: config('database.default');
        $orderColumn = DB::connection($connection)->getQueryGrammar()->wrap($this->orderColumn);

        $byOrder = $orderColumn . ' = 0,' . $orderColumn;

        return static::with('roles')->orderByRaw($byOrder)->get()->toArray();
    }

    /**
     * determine if enable menu bind permission.
     * @return bool
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function withPermission()
    {
        return (bool)config('admin.menu_bind_permission');
    }

    /**
     * Detach models from the relationship.
     * @return void
     */
    protected static function boot()
    {
        static::treeBoot();

        static::deleting(function($model) {
            $model->roles()->detach();
        });
    }
}