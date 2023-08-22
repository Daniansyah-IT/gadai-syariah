<?php
if (isset($_GET['image'])) {
    $image = $_GET['image'];
    // Display image to edit
    echo "<img src='img/carousel/$image'  alt='$image' width='500'>";
    echo "<form action='edit.php' method='post' enctype='multipart/form-data'>";
    echo "<input type='file' name='newImage'>";
    echo "<input type='hidden' name='oldImage' value='$image'>";
    echo "<input type='submit' value='Save'>";
    echo "</form>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newImage = $_FILES['newImage']['name'];
        $oldImage = $_POST['oldImage'];
        move_uploaded_file($_FILES['newImage']['tmp_name'], "img/carousel/$newImage");
        unlink("img/carousel/$oldImage"); // Delete old image
        header("Location: content.php");
    }
}
?>
