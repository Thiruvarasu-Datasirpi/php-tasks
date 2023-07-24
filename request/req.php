<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name =  $_REQUEST["name"];
        $email =  $_REQUEST["email"];

        if (!empty($name) && !empty($email)) {
            // Process the data (e.g., store it in a database)
            // For this example, we'll just display the submitted data back to the user
            echo "Name: " . htmlspecialchars($name) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        } else {
            echo "Please fill in both name and email fields.";
        }
    } else {
        echo "Form submission method not allowed.";
    }
    ?>