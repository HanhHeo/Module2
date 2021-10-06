<?php 
   namespace Squares;
   use Rectangles\Rectangle;
  
    class Square extends Rectangle {
        public function __construct($width,$name)
        {
            parent::__construct($width,$width,$name);
        }
    }

?>