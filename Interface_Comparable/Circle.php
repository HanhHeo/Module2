<?php 
namespace Moduel2\Interface_Comparable;

class Circle {
    public int|float $radius;
    public string $name;

    public function __construct($radius,$name)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function getRadius(): float|int
    {
        return $this->radius;
    }
    public function calculateArea(): int|float
    {
      return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter():int|float
    {
        return pi() * $this->radius * 2 ;
    }
}

?>