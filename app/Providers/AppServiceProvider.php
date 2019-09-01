<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Using view composer to set following variables globally
        /*view()->composer('*',function($view) {
            $view->with('menus', \App\Menu::all());
            // if you need to access in controller and views:
            Config::set('menus', $menus); 
        });*/
    }
}
