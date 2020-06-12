<?php

namespace Ipulmisaja\Macoa\Facades;

use Illuminate\Support\Facades\Facade;

class Passport extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'passport';
    }
}