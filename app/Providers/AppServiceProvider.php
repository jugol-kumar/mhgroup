<?php

namespace App\Providers;

use App\Models\OurConcern;
use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();


        view()->composer(
            ['frontend.partials.header'],
            function ($view) {
                $view->with('concerns', OurConcern::all());
            }
        );
    }
}
