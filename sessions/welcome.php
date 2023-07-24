<?php

session_start();


if (isset($_SESSION["username"])&&isset($_SESSION["userdept"])) {
    $username = $_SESSION["username"];
    $userdept = $_SESSION["userdept"];
} else {
   
    header("Location: index.html");
    exit(); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to PHP Session Example</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <h2>Your dept is : <?php echo $userdept; ?></h2>
    <p>This is a simple PHP session example. Your name is stored in the session.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>