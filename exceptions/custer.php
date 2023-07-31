<?php
function customErrorHandler($errorNo, $errorMsg, $errorFile, $errorLine)
{
    $logMessage = "Error [$errorNo] in $errorFile on line $errorLine: $errorMsg\n";
    error_log($logMessage, 3, "error.log");

    echo "An error occurred. Please try again later."."\n";
    echo $logMessage;
}

set_error_handler("customErrorHandler");



echo $undefinedVariable;



?>



