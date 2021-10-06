<?php 
  include_once "Shape.php";
  include_once "Circle.php";
  include_once "Cylinder.php";
  include_once "Rectangle.php";   
  include_once "Square.php";
   
  use Shapes\Shape;
  use Circles\Circle;
  use Rectangles\Rectangle;
  use Cylinders\Cylinder;
  use Squares\Square;



  $circle = new Circle(10,"Hình tròn ");
  echo "<br>". "Circle Area: " . $circle->calculateArea() . "<br>";
  echo "<br>". "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";
  echo "<hr>";

  $cylinder = new Cylinder(10,10,"Hình trụ");
  echo "<br>". "Cylinder Area: " . $cylinder->calculateArea() . "<br>";
  echo "<br>". "Cylinder Perimeter: " . $cylinder->calculatePerimeter() . "<br>";
  echo "<hr>";

  $rectangle = new Rectangle(7,7,"Hình chữ nhật");
  echo "<br>". "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
  echo "<br>". "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "<br>";
  echo "<hr>";

  $square = new Square(10,"Hình vuông");
  echo "<br>". "Square Area: " . $cylinder->calculateArea() . "<br>";
  echo "<br>". "Square Perimeter: " . $cylinder->calculatePerimeter() . "<br>";



?>