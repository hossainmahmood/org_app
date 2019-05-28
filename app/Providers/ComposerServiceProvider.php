<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('layouts.app','App\Http\ViewComposers\NavigationComposer');
       
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
