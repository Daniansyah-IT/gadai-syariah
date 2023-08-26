<?php
 require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<body>
<!-- carousel -->
<div class="">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            
                <?php
                    $images = scandir("img/carousel/"); // List all files in "images" directory

                    foreach ($images as $image) {
                        if ($image !== "." && $image !== "..") {
                            echo "<div class='carousel-item active'>";
                            echo "<img src='img/carousel/$image' class='d-block w-100'  alt='$image'>";
                            echo "</div>";
                        }
                    }
                ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <h1 class="text-center">PROMOTIONS</h1>
        <div class="row">
            <?php
            // Database connection parameters
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = '';
            $db_name = 'gadai_syariah';

            $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$connection) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            // Fetch promotions from database
            $query = "SELECT title, description, image, start_date, end_date FROM promo";
            $result = mysqli_query($connection, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row['title'] . '</h5>';
                    echo '<p class="card-text">' . $row['description'] . '</p>';
                    echo '<p class="card-text"><small class="text-muted">Start Date: ' . $row['start_date'] . ' - End Date: ' . $row['end_date'] . '</small></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Error: " . mysqli_error($connection);
            }

            mysqli_close($connection);
            ?>
        </div>
    </div>
    
</section>




<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>About Us</h2>
                <p>PT.Gadai Syariah Berkat Bersama merupakan perusahaan yang bergerak di bidang Keuangan dengan Jasa gadai yang menerima Barang-barang Elektronik yang bernilai jual dan Kendaraan bermotor sebagai fokus produknya . Mengingat banyak perusahaan besar sejenis hanya berfokuskepada penerimaan Perhiasan /Emas, belum lagi banyak perusahaan yang melakukan praktik ketidak adilan melalui praktik riba (usury) dan ketidak pastian (gharar), menjawab keresahan itu maka PT.Gadai Syariah Berkat Bersama hadir untuk membantu Masyarakat untuk mendapatkan Pinjaman, yang Cepat, Aman dan Amanah . Tugas pokok dari PT.Gadai Syariah Berkat Bersama adalah memberikan pinjaman kepadamasyarakat yang membutuhkan.Pemberian pinjaman ini tidak terbatas untuk kalangan atau kelompok masyarakat tertentu, namun di Indonesia pemanfaat lembaga keuangan ini masih didominasi oleh kalangan yang mempunyai Perhiasan / Emas dan masih sedikit menjangkau kalangan yang hanya mempunyai Barang Elektronik dan Kendaraan dengan Syarat-syarat yang memudahkan . Dalam upaya mengubah persepsi masyarakat, salah satu cara yang digunakan PT.Gadai Syariah Berkat Bersama adalah dengan menciptakan motto Fokus Kepada Solusi Bukan Kepada Masalah .</p>
                <a href="about.php" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-4">
                <img src="img/about/6.png" alt="About Us" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="center-text">News</h2>
                <?php
                $sql = "SELECT id, title, content, image FROM news ORDER BY id DESC LIMIT 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-12">
                                <div class="card bg-success border-success border-4">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <img src="img/news/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title text-light border-bottom">' . $row['title'] . '</h5>
                                        <p class="card-text text-light border-bottom">' . $row['content'] . '</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>';
                      }
            
                } else {
                    echo '<p>No news found.</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</section>
<?php include 'include/branchmaps.php'; ?>
<!-- Footer -->
<!-- Footer (same as index.php) -->
<?php include 'include/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
