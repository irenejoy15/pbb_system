<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
class GlobalFunctionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $now = Carbon::now();
        View::share('api_url', 'http://192.168.0.183:81/api');
        View::share('year_now', $now->year);
        View::share('month_now', (string)$now->month);
    }
}
