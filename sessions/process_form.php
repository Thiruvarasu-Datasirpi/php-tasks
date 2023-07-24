<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $dept= $_POST["dept"];

    $_SESSION["username"] = $name;
    $_SESSION["userdept"] = $dept;

    header("Location: welcome.php");
    exit(); 
}
?>
