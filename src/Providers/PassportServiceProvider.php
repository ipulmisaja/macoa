<?php

namespace Ipulmisaja\Macoa\Providers;

use Ipulmisaja\Macoa\Helpers\Passport;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class PassportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('passport', function() {
            return new Passport;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() { }
}