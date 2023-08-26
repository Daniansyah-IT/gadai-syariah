<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

<!-- Navbar (same as index.php) -->
<?php include 'include/navbar.php'; ?>
<section class="bg-light py-5">
    <img src="img/about/about.png" class="w-100 mtt" alt="">
</section>
<!-- Services Section -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            
        <h1 class="">Service</h1>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="img/service/el.jpg" alt="Service" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Elektonik</h5>
                        <p class="card-text">Crafting stunning and responsive websites.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="img/service/el1.png" alt="Service" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Kendaraan Bermotor</h5>
                        <p class="card-text">Boosting your online presence and engagement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Contact Us</h2>
                <p>If you have any questions or inquiries, feel free to get in touch with us.</p>
                <a href="contact.php" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer (same as index.php) -->
<?php include 'include/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
