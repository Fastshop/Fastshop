<?php

namespace App\Admin\Providers;

use Illuminate\Support\Facades\Route;
use App\Module\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public $name = "admin";
    public $Name = "Admin";
}
