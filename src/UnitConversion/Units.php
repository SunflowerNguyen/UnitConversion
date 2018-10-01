<?php

namespace DuyVuSeldat\UnitConversion;

class Units {
    public static $conversion = [

        // Weight
        'MICROGRAM'  => 1e-9,
        'MILLIGRAM'  => 1e-6,           // mg
        'DECIGRAM'   => 0.0001,         // dg
        'GRAM'       => 0.001,          // g
        'DEKAGRAM'   => 0.01,           // dag
        'HECTOGRAM'  => 0.1,            // hg
        'CARAT'      => 0.0002,         // car
        'KILOGRAM'   => 1,              // kg
        'METRIC_TON' => 1000,           // t
        'OUNCE'      => 0.0283495,      // oz
        'POUND'      => 0.453592,       // lbs
        'US_STONE'   => 5.66990,        // st_us
        'UK_STONE'   => 6.35029,        // st_uk
        'TON_SHORT'  => 907.185,        // t_us
        'TON_LONG'   => 1016.0469088,   // t_uk

        // Length
        'NANOMETER'     => 1e-9,        // nm
        'MICROMETER'    => 1e-6,        // µm
        'MILLIMETER'    => 0.001,       // mm
        'INCH'          => 0.0254,      // in
        'CENTIMETER'    => 0.01,        // cm
        'HAND'          => 0.1016,      // hd
        'DECIMETER'     => 0.1,         // dm
        'FOOT'          => 0.3048,      // ft
        'YARD'          => 0.9144,      // yd
        'METER'         => 1,           // m
        'DEKAMETER'     => 10,          // dam
        'HECTOMETER'    => 100,         // hm
        'KILOMETER'     => 1000,        // km
        'MEGAMETER'     => 1000000 ,    // Mm
        'MILE'          => 1609.34,     // mi
        'NAUTICAL_MILE' => 1852,        // n.mi

        // Volume
        'MILLILITER'    => 1e-6,            // mL
        'LITER'         => 0.001,           // L
        'HECTOLITER'         => 0.1,        // hL
        'CUBIC_METER'   => 1,               // m^3
        'CUBIC_KILOMETER'   => 1000000000,  // km^3

        // Area
        'SQUARE_METER'      => 1,            // m^2
        'SQUARE_KILOMETER'  => 1000000,      // km^2
        'SQUARE_CENTIMETER' => 0.0001,      // cm^2
        'SQUARE_MILLIMETER' => 1e-6,        // mm^2
        'HECTARE'    => 10000,              // ha
        'ACRE'              => 4046.856,        // ac
        'SQUARE_INCH'      => 0.00064516,   // in^2
        'SQUARE_FEET'      => 0.09290304,   // ft^2
        'SQUARE_YARD'      => 0.83612736,   // yd^2
        'SQUARE_FOOT'      => 0.09290304,   // fd^2
        'SQUARE_MILE'      => 2589988.110336,// mi^2

        // Time
        'NANOSECOND'  => 1e-9,          // nm
        'MICROSECOND' => 1e-6,          // mcs
        'MILLISECOND' => 0.001,         // ms
        'SECOND'      => 1,             // s
        'MINUTE'      => 60,            // m
        'HOUR'        => 3600,          // h
        'DAY'         => 86400,         // d
        'WEEK'        => 604800,        // w
        'MONTH'       => 2.62974e6,     // m
        'YEAR'        => 3.15569e7,     // y
        'DECADE'      => 3.15569e8,     // dc
        'CENTURY'     => 3.15569e9,     // ct
        'MILLENIUM'   => 3.1556926e10,  // ml

        // Fuel
        'METER/LITER'               => 1,           // m/L
        'KILOMETER/LITER'           => 1000,        // km/L
        'HECTOMETER/LITER'          => 100,         // hm/L
        'MILE/LITER'                => 1609.344,    // mi/L
        'NAUTICAL/LITER'            => 1853.24496,  // na/L
        'METER/GALLON'              => 0.2199687986,  // m/G
        'KILOMETER/GALLON'          => 264.1720524,  // km/G
        'MILE/GALLON'               =>  354.00619,  // mi/G
        'NAUTICAL/GALLON'           =>  489.5755247,  // na/G


        // Temperature
        'CELSIUS'    => 274.15,     // °C
        'FAHRENHEIT' => 255.372,    // °F
        'KELVIN'     => 1,          // K
    ];
}