<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Edit News</title>
</head>
<body>
  <div class="container mt-5">
    <h1>Edit News</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gadai_syariah";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];

        $sql = "UPDATE news SET title='$title', content='$content' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">News updated successfully.</div>';
            header('Location: berita.php');
        } else {
            echo '<div class="alert alert-danger" role="alert">Error updating news: ' . $conn->error . '</div>';
        }
    }

    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "SELECT id, title, content FROM news WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $row["title"]; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required><?php echo $row["content"]; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update News</button>
            </form>
            <?php
        } else {
            echo '<div class="alert alert-danger" role="alert">News not found.</div>';
        }
    }

    $conn->close();
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
