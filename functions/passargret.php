<?php
function stradds($str1, $str2)
{
    $result = $str1 . " " . $str2;
    return $result;
}


$stradd = stradds("Hello", "Thiru");
echo $stradd."\n";


function eve($number)
{
    return ($number % 2 == 0);
}


if (eve(9)) {
    echo "The number is even.";
} else {
    echo "The number is odd.";
}

?>