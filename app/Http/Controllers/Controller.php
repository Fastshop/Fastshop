<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke(Request $request, $name = null, $action = 'index')
    {
        $act = strtolower($request->method()) . ucfirst($name ?: 'index');

        if (method_exists($this, $act)) {
            return app()->call([$this, $act], ['action' => $action]);
        } elseif (method_exists($this, $act = ucfirst($name ?: 'index'))) {
            return app()->call([$this, $act], ['action' => $action]);
        } else {
            throw new RouteNotFoundException();
        }

    }
}
