<?php
function getUserInput($prompt)
{
   
    echo $prompt . ": ";

    $input = trim(fgets(STDIN));

   
    if (empty($input)) {
        throw new Exception("Input cannot be empty.");
    }

    return $input;
}

try {
  
    $name = getUserInput("Enter your name");
    echo "Hello, $name!\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>