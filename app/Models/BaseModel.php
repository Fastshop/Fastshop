<?php
namespace App\Models;

use App\Support\TableField;
use Encore\Admin\Traits\AdminBuilder;
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
    protected $__tp_model;
    use AdminBuilder;
    
    /**
     * @return static|\Illuminate\Database\Eloquent\Builder
     */
    public static function fn()
    {
        return new TableField();
    }
    
    /**
     * @param array $data
     * @return static
     */
    public static function as(&$data = null)
    {
        if(is_array($data) || empty($data)) {
            return new static($data ?: []);
        }
        
        return $data;
    }
    
    // public function fromJson($value, $asObject = FALSE)
    // {
    //     if( !$asObject) {
    //         return (array)parent::fromJson($value, $asObject);
    //     }
    //
    //     return parent::fromJson($value, $asObject);
    //
    // }
    
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
        return $this->__tp_model ?: $this->__tp_model = D($basename)->data($this->toArray());
    }
}
