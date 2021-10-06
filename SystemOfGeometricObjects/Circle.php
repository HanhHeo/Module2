<?php 
    namespace Circles;
    use Shapes\Shape;
class Circle extends Shape {
    public int|float $radius;
    public function __construct($radius,$name)
    {
        parent::__construct($name);
        $this->radius = $radius;
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