<?php

use Illuminate\Container\Container;
use Symfony\Component\VarDumper\VarDumper;


if( ! function_exists('dump')) {
    /**
     * @param $var
     * @param array $moreVars
     * @return array
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var, ...$moreVars) {
        // find caller
        $_ = debug_backtrace();
        while($d = array_pop($_)) {
            $function = strToLower($d['function']);
            if(in_array($function, ["krumo", "k", "kd", 'dd', "dump"]) || (strToLower(@$d['class']) == 'krumo')) {
                print "{$d['file']}:{$d['line']} \n";
                break;
            }
        }
        
        VarDumper::dump($var);
        
        foreach($moreVars as $v) {
            VarDumper::dump($v);
        }
        
        if(1 < func_num_args()) {
            return func_get_args();
        }
        
        echo PHP_EOL;
        
        return $var;
    }
}

if( ! function_exists('dd')) {
    /**
     * @param mixed ...$vars
     * @return mixed
     */
    function dd(...$vars) {
        // find caller
        $_ = debug_backtrace();
        while($d = array_pop($_)) {
            $function = strToLower($d['function']);
            if(in_array($function, ["krumo", "k", "kd", 'dd', "dump"]) || (strToLower(@$d['class']) == 'krumo')) {
                print "{$d['file']}:{$d['line']} \n";
                break;
            }
        }
        foreach($vars as $v) {
            VarDumper::dump($v);
        }
        
        echo PHP_EOL;
        
        die(1);
    }
}

if (! function_exists('isDingoApiRequest')) {
    function isDingoApiRequest()
    {
        $requestDomain = trim(request()->root(), '/');
        $prefix = config('api.prefix');
        if (! empty($prefix)) {
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
if (! function_exists('getApiDomain')) {
    function getApiDomain()
    {
        $uri = config('api.domain');
        if (empty($uri)) {
            $uri = config('app.url');
        }
        $prefix = config('api.prefix');
        if (! empty($prefix)) {
            $uri = trim($uri, '/') . '/' . trim($prefix, '/');
        }
        return $uri . '/';
    }
}
if (! function_exists('getApiAcceptHeader')) {
    function getApiAcceptHeader()
    {
        return 'application/'
            . config('api.standardsTree') . '.'
            . config('api.subtype') . '.'
            . config('api.version') . '+json';
    }
}

if( ! function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param string|null $abstract
     * @param array $parameters
     * @return mixed|\App\Kernel
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function app($abstract = null, array $parameters = []) {
        if(is_null($abstract)) {
            return Container::getInstance();
        }
        
        return Container::getInstance()->make($abstract, $parameters);
    }
}
