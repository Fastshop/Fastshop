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

if(!defined('ABSPATH')){
    if (! function_exists('__')) {
        /**
         * Translate the given message.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @return string|array|null
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        function __($key, $replace = [], $locale = null)
        {
            return app('translator')->getFromJson($key, $replace, $locale);
        }
    }
    
}

Route::get('/', function () {
    return view('welcome');
});
