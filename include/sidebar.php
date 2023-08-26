<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    /* Mengubah warna tautan saat disentuh */
    .costum-link:hover {
      color: cyan; /* Ganti dengan warna yang Anda inginkan */
    }
  </style>
<body>
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-success sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link link-light active" aria-current="page" href="dashboard.php">
                          <i class="fa fa-home w3-large"></i> 
                            <span class="ml-2 costum-link">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-light" aria-current="page" href="content.php">
                          <i class="fa fa-book w3-large"></i>   
                          <span class="ml-2 costum-link">Kelola Konten</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-light" aria-current="page" href="promo.php">
                          <i class="fa fa-book w3-large"></i>  
                            <span class="ml-2 costum-link">Kelola Promo</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-light" aria-current="page" href="berita.php">
                          <i class="fa fa-book w3-large"></i>  
                            <span class="ml-2 costum-link">Kelola Berita</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-light" aria-current="page" href="users.php">
                          <i class="fa fa-users w3-large"></i>
                            <span class="ml-2 costum-link">User</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-light" aria-current="page" href="register.php">
                          <i class="fa fa-gears w3-large"></i> 
                            <span class="ml-2 costum-link">Register Users</span>
                          </a>
                        </li>

                      </ul>
                      
                </div>
            </nav>
</body>
</html>