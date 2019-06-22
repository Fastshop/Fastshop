<?php

namespace App\Models;

use App\Support\TableField;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BaseModel
 *
 * @package shop.pro
 * @since 2019-06-16
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel query()
 */
class BaseModel extends Model
{
    const UPDATED_AT = NULL;
    const CREATED_AT = NULL;

    /**
     * @return static|\Illuminate\Database\Eloquent\Builder
     */
    public static function fn()
    {
        return new TableField();
    }

    /**
     * @return \think\db\Query
     * @throws \ReflectionException
     */
    public function tp()
    {
        $name = $this->table;
        $shortClass = (new \ReflectionClass($this))->getShortName();
        $basename = preg_replace("/^tp_/", '', $this->table);
        $modelClass = str_replace('_', '', ucwords($basename, '_'));
        return D($basename)->data($this->toArray());
    }
}
