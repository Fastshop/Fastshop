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

Route::prefix('dev')->group(function() {
    
    Route::any('/{name?}/{action?}/{extra?}', DevController::class)
        ->where([
            'extra' => '[\w/\-]+',
            'name' => '[\w\-]+',
            'action' => '[\w\-]+',
        ]);
});
