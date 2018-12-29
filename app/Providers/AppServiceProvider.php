<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Models\Sim::observe(\App\Observers\Seobserver::class);
        \App\Models\Category::observe(\App\Observers\Seobserver::class);
        \App\Models\Network::observe(\App\Observers\Seobserver::class);
        \App\Models\Page::observe(\App\Observers\Seobserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
