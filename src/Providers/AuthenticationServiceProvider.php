<?php

namespace Ipulmisaja\Macoa\Providers;

use Ipulmisaja\Macoa\Helpers\Authentication;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('authentication', function() {
            return new Authentication;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() { }
}