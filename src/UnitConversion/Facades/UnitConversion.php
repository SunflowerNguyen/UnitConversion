<?php
namespace DuyVuSeldat\UnitConversion\Facades;

use Illuminate\Support\Facades\Facade;

class UnitConversion extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'unit-conversion';
    }
}