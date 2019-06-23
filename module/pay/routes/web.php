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

use App\Dev\Http\Controllers\DevController;
use App\Pay\Http\Controllers\AlipayTestController;
use App\Pay\Http\Controllers\PayController;

Route::prefix('pay')->group(function() {
    // Route::resource('/',  PayController::class);
    
    Route::any('/{name?}/{action?}/{extra?}', AlipayTestController::class)
        ->where([
            'extra' => '[\w/\-]+',
            'name' => '[\w\-]+',
            'action' => '[\w\-]+',
        ]);
    
});
