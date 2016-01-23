<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //todo: fix it
        session_start();

        if(!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = 'en';
        }
        App::setLocale($_SESSION['lang']);
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
