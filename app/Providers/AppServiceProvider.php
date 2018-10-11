<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    //protected $locateZone = [""];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Deixar o diffForHumans() em portugues
        \Carbon\Carbon::setLocale(str_replace('_', '-', app()->getLocale()));
        
        Schema::defaultStringLength(191);
    }

    // function locatesZone(){
    //     return str_replace('_', '-', app()->getLocale());
    // }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create(str_replace('_', '-', app()->getLocale()));
            // return \Faker\Factory::create(app()->getLocale());
        });
        //
    }
}
