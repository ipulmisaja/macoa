<?php

namespace Ipulmisaja\Macoa\Providers;


use Illuminate\Support\ServiceProvider;
use Ipulmisaja\Macoa\Helpers\InputMask;

class InputMaskServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return new InputMask;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() { }
}