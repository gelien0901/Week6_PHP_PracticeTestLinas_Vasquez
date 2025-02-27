//Practice 01
<?php

$side1 = 10;
$side2 = 10;
$side3 = 10;

$s = ($side1 + $side2 + $side3) / 2;

$area_of_triangle = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
echo "The area of the triangle is: " . $area_of_triangle;

?>
