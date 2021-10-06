<?php 
   namespace Cylinders;
   use Circles\Circle;

   class Cylinder extends Circle
   {
    public int $height;
    public function __construct($height,$radius,$name)
    {
        parent::__construct($radius,$name);
        $this->height = $height;
    }
    public function calculateArea():int|float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolumn():int|float
    {
        return parent::calculateArea() * $this->height;
    }
    
   }
  

?>