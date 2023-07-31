<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>CRUD Application</title>
</head>
<body class="th">
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

    // Step 3: Handle CRUD operations

    // CREATE (Add new user)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $query = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";

        if (mysqli_query($conn, $query)) {
            echo "User added successfully.";
        } else {
            echo "Error adding user: " . mysqli_error($conn);
        }
    }

    // UPDATE (Update user information)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $id = $_POST['id'];
        $newName = $_POST['name'];
        $newEmail = $_POST['email'];
        $newAge = $_POST['age'];

        $query = "UPDATE users SET name = '$newName', email = '$newEmail', age = $newAge WHERE id = $id";

        if (mysqli_query($conn, $query)) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user: " . mysqli_error($conn);
        }
    }

    // DELETE (Delete user)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id";

        if (mysqli_query($conn, $query)) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }
    }
    ?>

    <h1 class="th1">CRUD Application</h1>

    <!-- Create User Form -->
 
    <form action="create.php" method="post" class="th2">
    <label for="id"class="th4">Id</label><br><br>
        <input type="id" id="id" name="id" required class="th7">
        <br><br>
        <label for="name"class="th3">Name</label><br><br>
        <input type="text" id="name" name="name" required class="th7">
        <br><br><br>
        <label for="email"class="th3">Email</label><br><br>
        <input type="email" id="email" name="email" required class="th7">
        <br><br>
        <label for="age"class="th3">Age</label><br><br>
        <input type="number" id="age" name="age" required class="th7">
        <br><br><br>
        <input type="submit" name="add" value="Add User" class="th6" >
        <br><br>
        <a href="indexx.php" class="th8">click to see the list</a>
        <br><br>
    </form>

    <!-- View Users -->
   

    <?php
    mysqli_close($conn);
    ?>
  
</body>
</html>
