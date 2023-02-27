<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <div class="container">
<body data-bs-spy="scroll" data-bs-target="#nav-scroll">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#Home">HZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <section id="home">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/laravel-1-logo-png-transparent.png" class="d-block w-100" alt="img-laravel">
                    </div>
                    <div class="carousel-item">
                    <img src="images/php-1-logo-png-transparent.png" class="d-block w-100" alt="img-php">
                    </div>
                    <div class="carousel-item">
                    <img src="images/mysql-5-logo-png-transparent.png" class="d-block w-100" alt="img-mysql">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div>
                <div>
                    <div class="mt-5">
                        <h3 class="mb-1">Hii!</h3>
                        <h1 class="intro-title marker">I’m Hizkia Dwi Andri Hasibuan</h1>
                        <p class="lead fw-normal mt-1">Student from University of Udayana</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="images/laravel-1-logo-png-transparent.png" alt="img-profil" class="img-fluid">
            </div>
            <div class="col-md-7 offset-lg-1">
                <h2 class="fw-bolder">
                    About Me
                </h2>
                <p class="lh-lg">Hi! I'm Hizkia, a student from University of Udayana who is interested very much in programming, and always want tolearn more about it. I started to find My passion about Web Development when I learned Laravel framework. I hope to create many interesting and useful websites.
                <h2 class="fw-bolder">
                    Contact
                </h2>
                <p class="lh-lg">Phone : +6282277053398</p>
                <p class="lh-lg">Email : hizkia.dwi096@student.unud.ac.id</p>
                <p class="lh-lg">Address : Jl. Nuansa Udayana Utara IV No.5, Jimbaran, Kec. Kuta Selatan, Kab. Badung</p>

                </p>
                <p class="fw-bold fs-4">Skills</p>
                <p>PHP</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" style="width: 60%">60%</div>
                </div>
                <p>HTML</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" style="width: 60%">60%</div>
                </div>
                <p>Laravel</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info" style="width: 65%">65%</div>
                </div>
                <p>MYSQL</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" style="width: 60%">60%</div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>
</html>