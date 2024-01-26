<?php

namespace Techamz\FlexadminTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FlexadminTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'flexadmin-templates');
        $this->publishes([
            __DIR__.'/../views/common' => resource_path('views/vendor/flexadmin-templates/common'),
        ], 'flexadmin-templates');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/flexadmin-templates/templates'),
        ], 'flexadmin-templates');

        Paginator::defaultView('flexadmin-templates::common.paginator');
        Paginator::defaultSimpleView('flexadmin-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
