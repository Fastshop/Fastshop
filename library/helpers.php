<?php

use App\Kernel;
use Illuminate\Container\Container;
use Symfony\Component\VarDumper\VarDumper;
use think\Config;

//if (defined('THINK_PATH')) {
//    require THINK_PATH . "/helper.php";
//}

// exit (function_exists('request') ? 'true' : 'false');

if (!function_exists('config')) {
    /**
     * 获取和设置配置参数
     *
     * @param string|array $name 参数名
     * @param mixed $value 参数值
     * @param string $range 作用域
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function config($name = '', $value = null, $range = '')
    {

        if (Kernel::$kernel != null) {
            $config = _config($name);
            if (isset($config)) {
                return $config;
            }
        }


        if (is_null($value) && is_string($name)) {
            $return = 0 === strpos($name, '?') ? Config::has(substr($name, 1), $range) : Config::get($name, $range);
        } else {
            $return = Config::set($name, $value, $range);
        }
        return $return ?? $value;
    }
}

if (!function_exists('_config')) {
    /**
     * Get / set the specified configuration value.
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param array|string|null $key
     * @param mixed $default
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function _config($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('config');
        }

        if (is_array($key)) {
            return app('config')->set($key);
        }

        //app()->configure(explode('.', $key)[0]);

        return app('config')->get($key, $default);
    }
}

if (!function_exists('dump')) {
    /**
     * @param $var
     * @param array $moreVars
     * @return array
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars)
    {
        // find caller
        $_ = debug_backtrace();
        while ($d = array_pop($_)) {
            $function = strToLower($d['function']);
            if (in_array($function, ["krumo", "k", "kd", 'dd', "dump"]) || (strToLower(@$d['class']) == 'krumo')) {
                print "{$d['file']}:{$d['line']} \n";
                break;
            }
        }

        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        echo PHP_EOL;

        return $var;
    }
}

if (!function_exists('dd')) {
    /**
     * @param mixed ...$vars
     * @return mixed
     */
    function dd(...$vars)
    {
        // find caller
        $_ = debug_backtrace();
        while ($d = array_pop($_)) {
            $function = strToLower($d['function']);
            if (in_array($function, ["krumo", "k", "kd", 'dd', "dump"]) || (strToLower(@$d['class']) == 'krumo')) {
                print "{$d['file']}:{$d['line']} \n";
                break;
            }
        }
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        echo PHP_EOL;

        die(1);
    }
}

if (!function_exists('isDingoApiRequest')) {
    function isDingoApiRequest()
    {
        $requestDomain = trim(request()->root(), '/');
        $prefix = config('api.prefix');
        if (!empty($prefix)) {
            $requestDomain = trim($requestDomain, '/') . '/' . trim($prefix, '/');
        }
        $strict = config('api.strict');
        if ($strict) {
            $strict = (getApiAcceptHeader() == request()->header('Accept')) ? true : false;
        } else {
            $strict = true; // always return true if not strict.
        }
        return (
            starts_with($requestDomain, trim(getApiDomain(), '/'))
            && (true == $strict)
        );
    }
}
if (!function_exists('getApiDomain')) {
    function getApiDomain()
    {
        $uri = config('api.domain');
        if (empty($uri)) {
            $uri = config('app.url');
        }
        $prefix = config('api.prefix');
        if (!empty($prefix)) {
            $uri = trim($uri, '/') . '/' . trim($prefix, '/');
        }
        return $uri . '/';
    }
}
if (!function_exists('getApiAcceptHeader')) {
    function getApiAcceptHeader()
    {
        return 'application/'
            . config('api.standardsTree') . '.'
            . config('api.subtype') . '.'
            . config('api.version') . '+json';
    }
}

if (!function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param string|null $abstract
     * @param array $parameters
     * @return mixed|\App\Kernel
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function app($abstract = null, array $parameters = [])
    {
        if (is_null($abstract)) {
            return Container::getInstance();
        }

        return Container::getInstance()->make($abstract, $parameters);
    }
}
