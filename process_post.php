<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $blogPosts = ('$title','$content');
    // Handle image upload
    $targetDir = "img/berita/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // You would typically save the blog post data to a database here

    // Redirect after processing
    header("Location: berita.php");
}
?>
