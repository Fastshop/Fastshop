<?php namespace App\Facades;

use App\Support\Less;
use Illuminate\Support\Facades\Facade;

class LessFacade extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Less::class;
    }
}
