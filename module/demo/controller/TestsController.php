<?php
/**
 * @author Moshihui
 * @email moshihui@gmail.com
 * @qq 86146002
 */

namespace app\demo\controller;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use model\tp\tp_ad;
use Schema;
use Tool;

class TestsController extends Controller
{
    public function index()
    {
        kd(__METHOD__);
    }

    public function getTableColumns()
    {
        return DB::getSchemaBuilder()->getColumnListing('admin_config');
    }

    public $extra_tables = [
        'admin_config', 'admin_menu',
    ];

    public function makeTables(Request $request)
    {
        //require_once APP_PATH."/think/helper.php";

        $tables = Tool::getAllTableNames();
        $tpl = file_get_contents(resource_path("table/config.php"));
        foreach($tables as $name) {
            $t = DB::select(DB::raw("SHOW COLUMNS FROM $name"));
            $key = '';
            if(preg_match("/^(admin|wp)_/", $name) && !in_array($name, $this->extra_tables)) {
                continue;
            }
            foreach($t as $col) {
                if($col->Key === 'PRI') {
                    $key = $col->Field;
                    break;
                }
            }
            $namespace = $list = explode('_', $name);

            $last = array_pop($namespace);
            if($r = array_search('return', $namespace)) {
                $namespace[ $r ] = 'returns';
            }

            $basename = preg_replace("/^tp_/", '', $name);
            $modelClass = str_replace('_', '', ucwords($basename, '_'));

            if(count(explode('_', $basename)) == 1) {
                $namespace[] = $last;
            } else {
                foreach($tables as $tname) {
                    if(strpos($tname, $name . '_') === 0) {
                        $namespace[] = $last;
                        break;
                    }
                }
            }

            // $tpclass = '\think\db\Query';
            // if(class_exists($_class = "\\app\\common\\model\\$modelClass")){
            //     $tpclass = $_class;
            // }

            $path = root_path("model/" . implode('/', $namespace) . "/$name.php");
            //$path = str_replace(['/return/'],['/returns/'],$path);
            $replace = [
                '__TPCLASS__' => '\\' . ($basename != $name ? get_class(D($basename)) : 'think\db\Query'),
                '__NAMESPACE__' => implode('\\', array_merge(['model'], $namespace)),
                '__CLASS__' => $name,
                '__TABLE_NAME__' => $name,
                '__KEY__' => $key,
            ];
            if( !is_dir($concurrentDirectory = dirname($path)) && !mkdir($concurrentDirectory, 0777, TRUE)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
            if( !file_exists($path) || $request->get('force')) {
                file_put_contents($path, str_replace(array_keys($replace), array_values($replace), $tpl));
                dump($name);
            }
        }
    }

    public function testModel()
    {
        M(tp_ad::class)->_GetAllCurrent();
    }

    function getTest()
    {
        $table = 'admin_config';
        $schema = Schema::getColumnListing($table);
        // $names = DB::table('columns')
        //     ->where('table_schema', env('DB_DATABASE'))
        //     ->where('table_name', $table)->get();

        //Schema::
        kd(get_defined_vars());

        kd(class_exists(admin_config::class));
        //M(Cart::class)->get
    }

    public function tables()
    {
        return Tool::getAllTableNames();
    }

    function menu()
    {
        require_once APP_PATH . "admin/common.php";
        $menu = getMenuArr();
        kd($menu);
    }
}