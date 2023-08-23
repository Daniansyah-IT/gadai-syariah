<?php
require 'connect.php';

$title = $_POST['title'];
$content = $_POST['content'];
$imageName = $_FILES['image']['name'];
$imageTemp = $_FILES['image']['tmp_name'];


$targetPath = "img/news/" . $imageName;
move_uploaded_file($imageTemp, $targetPath);

$sql = "INSERT INTO news (title, content, image) VALUES ('$title', '$content', '$imageName')";

if ($conn->query($sql) === TRUE) {
    header("Location: berita.php");
    echo "Berita berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
