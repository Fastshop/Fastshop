<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// kd(isDingoApiRequest());

$api = app('Dingo\Api\Routing\Router');
$api->version(['v1'], function(Dingo\Api\Routing\Router $api) {
    $api->get('user/login', 'Api\UserController@login');
});
$api->version(['v2'], function(Dingo\Api\Routing\Router $api) {
    $api->get('version', function (){
        return response('this is version v2');
    });
});

if (/*isDingoApiRequest() ||*/ app()->runningUnitTests() || app()->runningInConsole()) {
    
    collect(glob(base_path('../routes/api/v1/*.php')))
        ->each(function ($path) {
            ApiRoute::version('v1', [
                'middleware' => 'api.throttle',
                'limit'      => config('api.rate_limit', 60),
                'expires'    => config('api.expires', 5),
                'namespace'  => '',// '\App\Http\Controllers\API',
            ], function () use ($path) {
                require $path;
            });
        });
}
