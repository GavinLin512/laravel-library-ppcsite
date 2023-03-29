<?php

namespace Ppcsite\ViewComponent;

use Illuminate\Support\ServiceProvider;

class ViewComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
        $this->app->bind('packages-view-component', function($app) {
            return new \Ppcsite\ViewComponent\ViewComponent();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        // 使用載入
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Component');
        if ($this->app->runningInConsole()) {
            // Publish views
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/component'),
            ], 'view-component');
        }
    }
}
