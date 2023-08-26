<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar (same as index.php) -->
<?php include 'include/navbar.php'; ?>
<section class="bg-light py-5">
    <img src="img/about/about.png" class="w-100 mtt" alt="">
</section>
<!-- Contact Section -->
<section class="bg-light">
    <div class="container">
        <div class="row">
        <h1 class="">Contact Us</h1>
            <div class="col-md-6">
                <p>
Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami. Kami akan dengan senang hati membantu Anda</p>
                <address>
                    <strong>PT.Gadai Syariah Berkat Bersama</strong><br>
                    Teluk Dalam 185<br>
                    Tenggarong Seerang-Kutai Kartanegara, 75572<br>
                    <abbr title="Phone"><i class="bi bi-phone"></i></abbr> (+62) 852-4830-8889<br>
                    <abbr title="Email"><i class="bi bi-envelope"></i></abbr> info@gsmail.com
                    <h3 class="mt-3">Contact All Branch</h3>
                    <div  class="btn btn-success">
                    <a href="https://linktr.ee/Gadaisyariah.id/" class="btn text-white">Link</a>


                    </div>
                </address>
            </div>
            <div class="col-md-6">
                <form action="submit_contact.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer (same as index.php) -->

<?php include 'include/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
