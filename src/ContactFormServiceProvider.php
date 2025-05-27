<?php

namespace Onoma\Contactform;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
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
             
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Contactform');
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
         $this->publishes([__DIR__ . '/../config/config.php' => config_path('contactform.php')],'contactform-config');  
    }
}
