<?php

namespace daimekashiya\packagetemplate;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/*');
        $this->loadViewsFrom(__DIR__.'/views','packagetemplate');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/packagetemplate.php','packagetemplate');

        $this->publishes([
            __DIR__.'/config/packagetemplate.php'=>config_path('packagetemplate.php'),
            // __DIR__.'/config/packagetemplate.php'=>config_path('packagetemplate2.php'),
        ]);
    }

    public function register()
    {
         
    }

}