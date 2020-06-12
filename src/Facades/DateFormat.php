<?php

namespace Ipulmisaja\Macoa\Facades;

use Illuminate\Support\Facades\Facade;

class DateFormat extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dateformat';
    }
}