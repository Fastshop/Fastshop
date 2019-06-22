<?php
/**
 * @author Moshihui
 * @email moshihui@gmail.com
 * @qq 86146002
 */

namespace App\Module;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class ServiceProvider extends BaseServiceProvider
{
    public $name = 'shop';
    public $Name = "Shop";

    public function path($path = '')
    {
        return realpath(root_path("module/{$this->name}/$path"));
    }

    /**
     * Boot the application events.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom($this->path("src/Database/Migrations"));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register("App\\{$this->Name}\\Providers\\RouteServiceProvider");
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            $this->path('config/config.php') => config_path("{$this->name}.php"),
        ], 'config');
        $this->mergeConfigFrom(
            $this->path('config/config.php'), $this->name
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/vendor/' . $this->name);

        $sourcePath = $this->path('resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/vendor/' . $this->name;
        }, \Config::get('view.paths')), [$sourcePath]), $this->name);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/' . $this->name);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->name);
        } else {
            $this->loadTranslationsFrom($this->path('resources/lang'), $this->name);
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function registerFactories()
    {
        if (!app()->environment('production')) {
            app(Factory::class)->load($this->path('src/Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
