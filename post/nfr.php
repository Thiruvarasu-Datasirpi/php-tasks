<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];

   
    echo "Thank you for submitting the form!<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
}
?>