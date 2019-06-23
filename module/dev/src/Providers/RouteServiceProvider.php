<?php

namespace App\Dev\Providers;

use Illuminate\Support\Facades\Route;
use App\Module\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public $name = "dev";
    public $Name = "Dev";
}
