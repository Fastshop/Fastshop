<?php
/**
 * @author msh ${DATE}
 */

namespace App\Admin;

class AdminCp
{
    public function getMenu()
    {
        require_once APP_PATH . "admin/common.php";
        return getMenuArr();
    }
}