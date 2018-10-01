<?php
namespace DuyVuSeldat\UnitConversion;

class UnitConversion {


    protected static $conversion;

    protected $value;

    protected $unit;

    protected $native;

    public function __construct($value = 0 , $unit = '')
    {
        $this->value = $value;
        $this->unit = $unit;
        static::$conversion = Units::$conversion;
    }

    public function convert($quantity , $unit){
        return new UnitConversion($quantity, $unit);
    }

    public function to($unit){
        $this->value = $this->handle($this->value , $this->unit , $unit);
        $this->unit = $unit;

        return $this;
    }

    public function __toString()
    {
        return $this->format();
    }

    protected function handle($value , $from , $to){
        return ($value * $this->getUnit($from)) / $this->getUnit($to);
    }

    protected function getUnit($unit){
        if (!isset(self::$conversion[strtoupper($unit)])){
            throw new \Exception("Can not convert between 2 units.");
        }
        return self::$conversion[strtoupper($unit)];
    }


    public function format($decimals = 4, $decPoint = '.', $thousandSep = ',')
    {
        return number_format($this->value, $decimals, $decPoint, $thousandSep);
    }


}