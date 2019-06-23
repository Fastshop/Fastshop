<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Controller extends BaseController {
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __invoke(Request $request, $name = null, $action = 'index', $extra = null)
    {
        $name = str_replace(['-', '_'], '', ucwords($name, '-'));
        
        $act = strtolower($request->method()) . ucfirst($name ?: 'index');
        
        $extra = explode('/', $extra);
        $params = ['action' => $action, 'extra' => $extra];
        
        if(method_exists($this, $act)) {
            return app()->call([$this, $act], $params);
        }
        
        if(method_exists($this, $act = ucfirst($name ?: 'index'))) {
            return app()->call([$this, $act], $params);
        }
        
        throw new RouteNotFoundException();
        
    }
}
