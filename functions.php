<?php
// Define database connection constants
define('DB_HOST', 'localhost'); // Replace with your database host
define('DB_USER', 'root'); // Replace with your database username
define('DB_PASS', ''); // Replace with your database password
define('DB_NAME', 'gadai_syariah'); // Replace with your database name

// Function to establish a database connection
function connect_to_database() {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    return $connection;
}
?>
