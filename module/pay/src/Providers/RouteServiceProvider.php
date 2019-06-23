<?php

namespace App\Pay\Providers;

use Illuminate\Support\Facades\Route;
use App\Module\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public $name = "pay";
    public $Name = "Pay";
}
