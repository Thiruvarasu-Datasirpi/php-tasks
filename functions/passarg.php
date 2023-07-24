<?php 



function Ref(&$number) {
    $number += 1;
}

function outRef($number) {
    $number += 1;
    echo $number."\n";
}

$count1 = 5;
$count2 = 5;


ref($count1);
outref($count2);

echo "Counter1: $count1"."\n"; 
echo "Counter2: $count2";

?>