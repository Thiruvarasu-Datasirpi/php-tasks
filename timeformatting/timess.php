<?php
date_default_timezone_set("Asia/Kolkata");
echo date("y-m-d H:i:s") . "\n";




$timestamp = time();
echo $timestamp . "\n";


$dateComponents = getdate($timestamp);


$year = $dateComponents['year'];
$month = $dateComponents['month'];
$day = $dateComponents['mday'];
$hour = $dateComponents['hours'];
$minute = $dateComponents['minutes'];
$second = $dateComponents['seconds'];
$weekday = $dateComponents['wday'];


echo "Year: $year " . "\n";
echo "Month: $month" . "\n";
echo "Day: $day" . "\n";
echo "Hour: $hour" . "\n";
echo "Minute: $minute" . "\n";
echo "Second: $second" . "\n";
echo "Weekday: $weekday" . "\n";

$ts = time();
echo "Raw date format in time() : $ts"."\n";

$dateFormat = 'Y-m-d H:i:s'; 


$formattedDate = date($dateFormat, $ts);


echo "Formatted Date: $formattedDate";
?>