<?php

namespace App\Providers;

use Symfony\Component\Debug\ExceptionHandler;

class DingoApiServiceProvider extends \Dingo\Api\Provider\LaravelServiceProvider
{
    /**
     * Register the exception handler.
     */
    // protected function registerExceptionHandler()
    //     // {
    //     //     $this->app->singleton('api.exception', function ($app) {
    //     //         return new ExceptionHandler($app['Illuminate\Contracts\Debug\ExceptionHandler'], $this->config('errorFormat'), $this->config('debug'));
    //     //     });
    //     // }
}
