<?php

$name = "John";
$message = "Hello, $name!";
echo $message . "\n";

$originalString = "Hello, World!";
$uppercaseString = strtoupper($originalString);
$substring = substr($originalString, 0, 4);
$replacedString = str_replace("Hello", "Hi", $originalString);

echo $originalString . "\n";
echo $uppercaseString . "\n";
echo $substring . "\n";
echo $replacedString . "\n";

$globalVariable = "Hello";

function updateGlobalVariable()
{
    global $globalVariable;
    $globalVariable .= " World";
}

updateGlobalVariable();
echo $globalVariable."\n";


function greet($thiru){
    echo "welcome ".$thiru."\n";

}

greet("bheem");

function add($a, $b) {
    return $a + $b;
}

$result = add(2, 3);

echo $result;
countVisitors();
function countVisitors() {
    static $counter = 0;
    $counter++;
    echo "Number of visitors: " . $counter ."\n";
}

countVisitors();



?>