<?php
$age = 25;

if ($age >= 18) {
    echo "You are eligible to vote."."\n";

    
}
$score = 75;

if ($score >= 90) {
    echo "PASSED IN FIRST CLASS!";
} elseif ($score >= 70) {
    echo "PASSED IN SECOND CLASS"."\n";
} else {
    echo "PASSED IN MINIMUM MARKS.";
}

$dayOfWeek = "Wednesday";

switch ($dayOfWeek) {
    case "Monday":
        echo "Start of the week.";
        break;
    case "Wednesday":
        echo "Middle of the week."."\n";
        break;
    case "Friday":
        echo "End of the week.";
        break;
    default:
        echo "Weekend!";
        break;
}

?>