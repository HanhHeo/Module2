<?php 
  class Point2D {
    public float $x;
    public float $y;
    public function __construct(float $x, float $y)
    {
     $this->x = $x;
     $this->y = $y; 
    }
    public function getX(): float 
    {
      return $this->x;
    }
    public function getY(): float 
    {
      return $this->y;
    }
    public function setX(float $x):void
    {
      $this->x = $x;
    }
    public function setY(float $y):void
    {
     $this->y = $y; 
    }
    public function setXY(float $x, float $y):void 
    {
      $this->x = $x;
      $this->y = $y; 
    }
    public function getXY()
    {
      return array($this->x, $this->y);
    }
    public function __toString()
    {
      return "($this->x , $this->y)";
    }
  }
 

?>