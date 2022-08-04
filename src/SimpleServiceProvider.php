<?php
namespace Huniel;
use Illuminate\Support\ServiceProvider;
class SimpleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'simple');
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
    }
    public function register()
    {
        //
    }
}