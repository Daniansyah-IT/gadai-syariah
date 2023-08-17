<?php
if (isset($_GET['image'])) {
    $image = $_GET['image'];
    unlink("img/carousel/$image"); // Delete the image
    header("Location: content.php");
}
?>
