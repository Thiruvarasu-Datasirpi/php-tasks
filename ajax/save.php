<?php
$host = 'localhost';
$username = 'thiru';
$password = 'Bheemodinson3d';
$database = 'AJAX';

$conn = mysqli_connect($host, $username, $password, $database);
$name = $_POST["name"];
$city = $_POST["city"];

$sql = "insert into users (NAME,CITY) VALUES ('{$name}','{$city}')";
if ($conn->query($sql)) {
    echo "data saved";

} else {
    echo "error";
}

?>