<?php
require_once 'functions.php';

// Establish database connection
$connection = connect_to_database();

// Now you can use the $connection variable to perform database operations
// For example: mysqli_query($connection, "SELECT * FROM your_table");
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

<!-- Navbar -->
<!-- Navbar (same as index.php) -->
<?php include 'navbar.php'; ?>

<!-- carousel -->
<div class="mt-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel/co6.png" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="img/carousel/co6.png" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="img/carousel/co6.png" class="d-block w-100" alt="Slide 3">
            </div>
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


<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat tincidunt arcu, id pharetra ante. Sed fringilla tortor ac odio auctor scelerisque.</p>
                <a href="about.php" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-6">
                <img src="img/carousel/bd.png" alt="About Us" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Contact Us</h2>
                <p>If you have any questions or inquiries, feel free to get in touch with us.</p>
                <a href="contact.php" class="btn btn-primary">Contact Us</a>
            </div>
            <div class="col-lg-6">
                <img src="img/carousel/co1.png" alt="About Us" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<!-- Footer (same as index.php) -->
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
