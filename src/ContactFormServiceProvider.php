<?php

namespace Onoma\Contactform;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Onoma\Contactform\Http\View\Components\EmailComponent;

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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contactform');
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('contactform.php')],'contactform-config');
        Blade::component('email-template',EmailComponent::class);
    }
}
