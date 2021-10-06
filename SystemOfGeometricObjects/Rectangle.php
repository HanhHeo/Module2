<?php 
      namespace Rectangles;
      use Shapes\Shape;
    
  class Rectangle extends Shape {
      public int $width;
      public int $height;
      public function __construct($width, $height,$name)
      {
          parent::__construct($name);
          $this->width = $width;
          $this->height = $height;
      }
      public function calculateArea():int|float 
      {
          return $this->height * $this->width;
      }
      public function calculatePerimeter():int|float 
      {
          return ($this->width + $this->height) * 2;
      }
  }

?>