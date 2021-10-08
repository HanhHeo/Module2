<?php

include "Point2D.php";
include "Point3D.php";

$point2d = new Point2D(5, 10);
$point2d->setXY(5, 10);
echo '<pre>';
print_r($point2d);
echo '</pre>';
echo $point2d;
echo "<hr>";

$point3d = new Point3D(6, 9, 6);
$point3d->setXYZ(6, 9, 6);
echo $point3d->toString();
echo '<pre>';
print_r($point3d->getXYZ());
echo '</pre>';

