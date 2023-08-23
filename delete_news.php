<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gadai_syariah";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM news WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: berita.php");
    } else {
        echo "Error deleting news: " . $conn->error;
    }
}

$conn->close();
?>
