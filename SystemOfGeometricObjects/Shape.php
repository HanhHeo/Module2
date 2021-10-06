<?php 
namespace Shapes;
  class Shape {
      public string $name; 
      public function __construct($name) 
      {
        $this->name = $name;
      }
      public function show(): string  
      {
        return "I am a shape. My name is $this->name";
      }
  }


?>