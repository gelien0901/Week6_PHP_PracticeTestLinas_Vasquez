//Practice 01
<?php

$side1 = 10;
$side2 = 10;
$side3 = 10;

$s = ($side1 + $side2 + $side3) / 2;

$area_of_triangle = sqrt($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
echo "The area of the triangle is: " . $area_of_triangle;

?>

Practice Set 01
<?php
// Poorly organized and hard-to-read code

// Calculate the total price of items in a shopping cart
$items = [
      ["name" => "Widget A", " price" => 10],
      ["name" => "Widget B", " price" => 15],
      ["name" => "Widget A", " price" => 20],
];

$total = 0;
foreach ($items as $items) {
      $total += $item["price"];
}

echo "Total price: $" . $total;

//Perform a series of string manipulations
$string = "This is a poorly written program with little structure and readability.";

//remove spaces and convert to lowercase
$string  = str_replace(" ", " ", $string);
$string = strtolower($string);

//Display the modified string
echo "\nModified string: " . $string;

//check if a number  is even or odd
$number = 42;

if ($number % 2 == 0 {
    echo "\nThe number" .  $number . "is even.";
} else {
     echo "n\The number" . $number ."is odd";
}

?>
