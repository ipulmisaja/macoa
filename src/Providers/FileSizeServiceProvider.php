<?php

namespace Ipulmisaja\Macoa\Providers;

use Ipulmisaja\Macoa\Helpers\FileSize;
use Illuminate\Support\ServiceProvider;

class FileSizeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return new FileSize;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() { }
}