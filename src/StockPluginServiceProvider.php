<?php

namespace srekcud\Seat\StockPlugin;

use Seat\Services\AbstractSeatPlugin;

class StockPluginServiceProvider extends AbstractSeatPlugin
{
    public function boot(){
        if (!$this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }

        $this->loadTranslationsFrom(__DIR__ . '/resources/lang/', 'stockplugin');
        $this->loadViewsFrom(__DIR__ . '/resources/views/', 'stockplugin');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }

    public function register(){
        $this->mergeConfigFrom(__DIR__ . '/Config/stockplugin.sidebar.php','package.sidebar');
        $this->registerPermissions(__DIR__ . '/Config/stockplugin.permissions.php', 'stockplugin');
    }

    public function getName(): string
    {
        return 'SeAT stock level';
    }

    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/srekcud/seat-stock';
    }

    public function getPackagistPackageName(): string
    {
        return 'seat-stock';
    }

    public function getPackagistVendorName(): string
    {
        return 'srekcud';
    }
}