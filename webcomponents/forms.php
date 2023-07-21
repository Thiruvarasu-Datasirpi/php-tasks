<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"]."<br>";
    $email = $_POST["email"]."<br>";


    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
    
   
}



?>


<!DOCTYPE html>
<html>

<head>
    <title>forms</title>
</head>

<body>
  
<button onclick="hds()">navigate</button>

</body>
<script>
    function hds() {
    window.location.href="newpage.php";
  }
</script>

</html> 


