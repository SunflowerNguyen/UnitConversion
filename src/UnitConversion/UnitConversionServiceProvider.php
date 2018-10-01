<?php
namespace DuyVuSeldat\UnitConversion;

use Illuminate\Support\ServiceProvider;

class UnitConversionServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->app->bind('unit-conversion', function ($app) {
            return new UnitConversion;
        });
    }

}