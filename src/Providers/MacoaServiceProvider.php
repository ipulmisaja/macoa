<?php

namespace Ipulmisaja\Macoa\Providers;

use Ipulmisaja\Macoa\Helpers\Passport;
use Ipulmisaja\Macoa\Helpers\DateFormat;
use Ipulmisaja\Macoa\Helperse\Pagination;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MacoaServiceProvider extends ServiceProvider
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

        App::bind('dateformat', function() {
            return new DateFormat;
        });
        
        App::bind('pagination', function() {
            return new Pagination;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}