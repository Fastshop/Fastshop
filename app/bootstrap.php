<?php

use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('comment',function($comment = ''){
    $comment = addslashes($comment);
    $tableName = $this->prefix.$this->table;
    DB::statement("ALTER TABLE `{$tableName}` COMMENT = '$comment'");
});

