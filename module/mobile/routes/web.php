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

use App\Mobile\Http\Controllers\MobileController;

Route::prefix('mobile')->group(function() {
    Route::resource('/',  MobileController::class);
});
