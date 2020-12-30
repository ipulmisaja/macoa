<?php

namespace Ipulmisaja\Macoa\Providers;

use Ipulmisaja\Macoa\Helpers\IdGenerator;
use Illuminate\Support\ServiceProvider;

class IdGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return new IdGenerator;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() { }
}