<?php

$friends = ["thiru", "sabana", "prabha"];
$friends[3] = "sri";

for ($i = 0; $i < count($friends); $i++) {
    echo $friends[$i] . " " . "\n";
}

print_r($friends);

$fruits = ["apple", "banana", "orange"];

foreach ($fruits as $fruit) {
    if ($fruit == "apple")
        echo $fruit . " " . "\n";
}

$student = array(
    'name' => 'thiru',
    'age' => 25,
    'email' => 'thiru@datasirpi.com',
    'course' => 'ECE',
);
echo "The name of the student is " . $student['name'] . "\n";
echo "The age of the student is " . $student['age'] . "\n";
echo "The email of the student is " . $student['email'] . "\n";
echo "The course of the student is " . $student['course'] . "\n";


$staffs = array(
    array('thiru', 25, 'thiru@ds.com'),
    array('bheem', 22, 'bheem@ds.com'),
    array('odinson', 28, 'odinson@ds.com'),
);

echo $staffs[0][0]."\n"; 
echo $staffs[1][2]."\n";

$staffs[2][1] = 29; 

$staffs[3] = array('wassuppp', 30, 'wassup@ds.com');

print_r($staffs);

?>