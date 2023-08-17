<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar (same as index.php) -->
<?php include 'navbar.php'; ?>

<!-- Services Section -->
<section class="py-5">
    <div class="container">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/service-1.jpg" alt="Service" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">Crafting stunning and responsive websites.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/service-2.jpg" alt="Service" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Boosting your online presence and engagement.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/service-3.jpg" alt="Service" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text">Creating innovative and user-friendly mobile apps.</p>
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
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
