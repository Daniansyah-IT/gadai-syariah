<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .nav-item:hover {
  color: red; /* Ganti dengan warna yang Anda inginkan */
}
</style>
<body>

<!-- Navbar -->
<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-success shadow-sm navbar-scroll.scrolled">
    <div class="container">
        <a class="navbar-brand " href="#">
            <img src="img/logo/logo3.png" alt="Company Logo" class="center-image" width="100" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link nav-light cocostum-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-light" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-light" href="ourteam.php">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-light" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-light" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <!-- Search input on the right (responsive) -->
            <form class="d-lg-flex">
                <input id="searchInput" class="form-control me-lg-2 border-success" type="search" placeholder="Search" aria-label="Search">
            <button id="searchButton" class="btn btn-outline-light text-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
