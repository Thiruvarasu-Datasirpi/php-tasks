<?php
function greet($name){
    echo "hello  $name";

}

function add($num1,$num2){
    return $num1+$num2;

}

$result=add(10,20);
echo $result."\n";



greet("thiru");

?>