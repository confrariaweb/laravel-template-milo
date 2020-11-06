<?php

namespace ConfrariaWeb\TemplateMilo\Providers;

use ConfrariaWeb\TemplateMilo\Services\TemplateMiloService;
use Illuminate\Support\ServiceProvider;

class TemplateMiloServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Translations', 'templateMilo');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'templateMilo');
        $this->publishes([__DIR__ . '/../../config/cw_template_milo.php' => config_path('cw_template_milo.php')], 'config');
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/confrariaweb/template-milo'),
        ], 'public');
    }

    public function register()
    {
        $this->app->bind('TemplateMiloService', function ($app) {
            return new TemplateMiloService();
        });
    }
}
