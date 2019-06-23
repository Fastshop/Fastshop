<?php

namespace App\Support;

use ArrayObject;

/**
 * @package shop.pro
 * @since 2019-06-16
 * @mixin
 */
class TableField extends ArrayObject {
    
    public function offsetGet($index) {
        $value = parent::offsetGet($index);
        if( ! isset($value)) {
            return str_replace('__', '->', $index);
        }
        return $value;
        //parent::offsetGet($index); // TODO: Change the autogenerated stub
    }
}
