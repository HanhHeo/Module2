<?php
    include("circle.php");
    include("cylinder.php");
    $circle1 = new Circle('red', 5);
    echo "Color's cirlce: " . $circle1->get('color') . "<br />";
    echo "Radius's cirlce: " . $circle1->get('radius') . "<br />";
    echo "Area's circle: " . $circle1->calculateArea() . "<br />";
    echo "Perimeter's circle: " . $circle1->calculatePerimeter() . "<br />";
    echo "<hr>";
    $cylinder1 = new Cylinder('green', 4 , 8);
    echo "Color's cylinder: " . $cylinder1->get('color') . "<br />";
    echo "Radius's cylinder: " . $cylinder1->get('radius') . "<br />";
    echo "Height's cylinder: " . $cylinder1->get('height') . "<br />";
    echo "Area's circle: " . $cylinder1->calculateArea() . "<br />";
    echo "Perimeter's circle: " . $cylinder1->calculateVolume() . "<br />";
    ?>