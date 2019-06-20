<?php

namespace App\Models;

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
class BaseModel extends Model {
    
    const UPDATED_AT = null;
    const CREATED_AT = null;
    
    /**
     * @return static|\Illuminate\Database\Eloquent\Builder
     */
    public static function fn() {
        return new \TableField();
    }
}
