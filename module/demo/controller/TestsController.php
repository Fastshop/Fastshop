<?php
/**
 * @author Moshihui
 * @email moshihui@gmail.com
 * @qq 86146002
 */

namespace app\demo\controller;

use App\Http\Controllers\Controller;
use Tool;

class TestsController extends Controller
{
    public function index()
    {
        kd(__METHOD__);
    }

    function getTest()
    {
        kd(__METHOD__);
    }

    public function tables(){
        return Tool::getAllTableNames();
    }

    function menu()
    {
        require_once APP_PATH . "admin/common.php";
        $menu = getMenuArr();
        kd($menu);
    }
}