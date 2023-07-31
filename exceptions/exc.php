<?php
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 2);
    echo "Result: " . $result . "\n"; 

    $result = divide(10, 0); 
    echo "Result: " . $result . "\n"; 
} catch (Exception $t) {
    echo "Caught Exception: " . $t->getMessage() . "\n";
}

?>
