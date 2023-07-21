<?php

$a = 5;
$b = 3;
$sum = $a + $b;

echo $sum."\n";

$a = 10;
$b = 7;
$difference = $a - $b;
echo $difference."\n";



$a = 6;
$b = 4;
$product = $a * $b;
echo $product."\n";

$a = 10;
$b = 2;
$division = $a / $b;
echo $division."\n";

$a = 15;
$b = 4;
$remainder = $a % $b;
echo $remainder."\n";

$a = 2;
$b = 3;
$result = $a ** $b;
echo $result."\n";

$a = 5;
$a++; 
echo $a."\n";
$a = 10;
$a--;
echo $a."\n";


$age = 25;
$isStudent = false;

if ($age >= 18 && !$isStudent) {
    echo "You are an adult."."\n";
} else {
    echo "You are either under 18 or a student.";
}

$age = 25;
$message = ($age >= 18) ? "You are an adult." : "You are not an adult.";
echo $message;
?>