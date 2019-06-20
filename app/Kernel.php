<?php
namespace App;

// uses
use Illuminate\Foundation\Application;

/**
 * @package demo.pro
 * @since 2019-06-20
 */
class Kernel extends Application {
    
    /** @var \App\Http\Kernel */
    public static $kernel;
    
    /** @var \Illuminate\Http\Request */
    public static $request;
    
    public $namespace = 'App\\';
    
    /**
     * @return \App\Http\Kernel|\Illuminate\Contracts\Http\Kernel|mixed
     */
    public static function Core() {
        if(empty(self::$kernel)) {
            /** @var \App\Kernel $app */
            $app = require_once __DIR__.'/../core/bootstrap/app.php';
            /** @var  \App\Http\Kernel $kernel */
            self::$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
            self::$request = \Illuminate\Http\Request::capture();
            $app->instance('request', self::$request);
            self::$kernel->bootstrap();
        }
        return self::$kernel;
    }
    
    public function publicPath() {
        return dirname($this->basePath).DIRECTORY_SEPARATOR.'public';
    }
    
    public function configPath($path = '') {
        return dirname($this->basePath).DIRECTORY_SEPARATOR.'config' .($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
    
    public function path($path = '') {
        $appPath = $this->appPath ?: dirname($this->basePath).DIRECTORY_SEPARATOR.'app';
        
        return $appPath.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
