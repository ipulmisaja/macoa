<?php

namespace Ipulmisaja\Macoa\Providers;

use Ipulmisaja\Macoa\Helpers\DateFormat;
use Illuminate\Support\ServiceProvider;

class DateFormatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return new DateFormat;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() { }
}