<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="styles.css">
</head>
<body class="th9">
<h2 class="th10">View Users</h2>
    <?php
    $host = 'localhost'; 
    $username = 'thiru'; 
    $password = 'Bheemodinson3d';
    $database = 'phpdb'; 
   
       $conn = mysqli_connect($host, $username, $password, $database);
   
       // Step 2: Check the connection
       if (mysqli_connect_errno()) {
           die("Failed to connect to MySQL: " . mysqli_connect_error());
       }
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="user-info">';
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . ", Age: " . $row['age'],"\n";


        echo '<form action="update.php" method="post" style="display: inline;">
                  <input type="hidden" name="id" value="' . $row['id'] . '">
                  <input type="hidden" name="name" value="' . $row['name'] . '">
                  <input type="hidden" name="email" value="' . $row['email'] . '">
                  <input type="hidden" name="age" value="' . $row['age'] . '">
                  <input type="submit" name="update" value="Update">
              </form>';

        echo '<form action="delete.php" method="post" style="display: inline;" onsubmit="return confirm(\'Are you sure you want to delete this user?\');">
                  <input type="hidden" name="id" value="' . $row['id'] . '">
                  <input type="submit" name="delete" value="Delete">
              </form>';

        echo "<br>";
    }
    ?>
</body>
</html>