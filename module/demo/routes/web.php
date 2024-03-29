<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use app\demo\controller\TestsController;
use App\Demo\Http\Controllers\DemoController;

Route::prefix('demo')->group(function() {
    //Route::resource('/',  DemoController::class);
    Route::any("/{name?}/{action?}",TestsController::class);
});
