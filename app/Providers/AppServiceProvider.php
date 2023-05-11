<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function strpos;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $pos = strpos('foo', 'f');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
