<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php include 'include/navbar.php'; ?>

<div class="container mt-5">
    <br>
    <h1 class="">Blog Gadai Syariah Berbagi</h1>

    <?php
    // Sample blog post data (you would fetch this from a database)


    // Loop through blog posts and display them
    foreach ($blogPosts as $post) {
        echo "<div class='card mb-3'>";
        echo "<div class='card-header'><h2>{$post['title']}</h2></div>";
        echo "<div class='card-body'>";
        echo "<p>{$post['content']}</p>";
        echo "<p><strong>Author:</strong> {$post['author']}</p>";
        echo "<p><strong>Date:</strong> {$post['date']}</p>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>
