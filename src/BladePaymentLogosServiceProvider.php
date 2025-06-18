<?php

namespace Isapp\BladePaymentIcons;

use BladeUI\Icons\Factory;
use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;

class BladePaymentLogosServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'blade-payment-logos');
        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')?->get('blade-payment-logos', []);
            $factory->add('pl', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-payment-logos'),
            ], 'blade-payment-logos');

            $this->publishes([
                __DIR__.'/../config/blade-payment-logos.php' => $this->app->configPath('blade-payment-logos.php'),
            ], 'blade-payment-logos-config');
        }
    }
}
