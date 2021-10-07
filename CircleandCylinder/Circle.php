<?php
class Circle
{
    public $radius;
    public $color;
    public function __construct($color, $radius)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function get($name)
    {
        return $this->$name;
    }
    public function set($name, $value)
    {
        $this->$name = $value;
    }
    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

