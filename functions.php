<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'gadai_syariah';

    // Create a database connection
    $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Retrieve user data from the database
    $sql = "SELECT id, username, password, role FROM users WHERE username = '$username'";
    $result = $mysqli->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            
            $_SESSION['login'] = true;
            header('Location: dashboard.php');
            exit;
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    $mysqli->close();


   
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle image upload
    $targetDir = "images/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // Save promotion data to database (you can customize this part)
    // ...

    header("Location: index.php"); // Redirect after processing
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Database connection parameters
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'gadai_syariah';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


    // Handle image upload
    $targetDir = "img/promo/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // Allow only certain image file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Insert promotion data into database
    $query = "INSERT INTO promo(title, description, image, start_date, end_date) VALUES ('$title', '$description', '$targetFile', '$start_date', '$end_date')";

    if (mysqli_query($connection, $query)) {
        echo "Promotion added successfully!";
        header('Location: promo.php');
        
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
if (isset($_GET['id'])) {
    $promotionId = $_GET['id'];

    // Database connection parameters
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'gadai_syariah';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Delete promotion from database
    $query = "DELETE FROM promo WHERE id = '$promotionId'";

    if (mysqli_query($connection, $query)) {
        echo "Promotion deleted successfully!";
        header("Location: promo.php");
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}

?>