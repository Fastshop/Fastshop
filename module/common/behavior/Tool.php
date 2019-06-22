<?php
/**
 * @author msh ${DATE}
 */

namespace app\common\behavior;

use DB;

class Tool
{
    /**
     * @return string[]
     */
    public function getAllTableNames()
    {
        return DB::connection()->getDoctrineSchemaManager()->listTableNames();
    }
}