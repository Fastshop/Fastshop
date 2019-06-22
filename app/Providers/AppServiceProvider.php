<?php

namespace App\Providers;

use Encore\Admin\Config\Config;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        error_reporting(error_reporting() & ~E_NOTICE & ~E_DEPRECATED );
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $table = config('admin.extensions.config.table', 'admin_config');
         if (Schema::hasTable($table)) {
             Config::load();
         }
         \Blade::setEchoFormat('%s');
    }
}
