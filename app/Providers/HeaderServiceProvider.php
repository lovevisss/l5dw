<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.header', function($view)
        {
            $view->with('categories',Category::all());
        }
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
