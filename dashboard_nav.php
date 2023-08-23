<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class=" fixed-top navbar navbar-dark bg-success p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand mx-auto" href="dashboard.php">
                <img src="img/logo/logo3.png" width="150" alt="">
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3 btn-dark text-light " type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">Hallo, <?php echo $username; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
              </div>
        </div>
    </nav>
</body>
</html>