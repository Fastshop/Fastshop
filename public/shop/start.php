<?php
/**
 * Copyright (c) 2019. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace think;

// ThinkPHP 引导文件
// 1. 加载基础文件
use App\Kernel;

// require_once __DIR__."/thinkphp/helper.php";
require __DIR__ . '/../../module/think/helper.php';


require_once __DIR__ . "/../../core/vendor/autoload.php";

//define('VENDOR_PATH', ROOT_PATH . 'vendor' . DS);
// 定义应用目录
define('APP_PATH', realpath(__DIR__ . '/../../module') . DIRECTORY_SEPARATOR);
define('RUNTIME_PATH', realpath(__DIR__ . "/../../core/storage") .DIRECTORY_SEPARATOR. "runtime".DIRECTORY_SEPARATOR);
is_dir(RUNTIME_PATH) or mkdir(RUNTIME_PATH, 0777, true);

require __DIR__ . '/../../module/think/base.php';

$app = Kernel::core();

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

//$app->run();

// 2. 执行应用
App::run()->send();
