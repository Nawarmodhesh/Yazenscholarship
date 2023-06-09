<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-CmK+2zKUz1cpMaWvz/5wJ9yjz2ZB0IwvQKjYkK3Wwlvjw/Zz6l+UJ+0vOj7mXy1y8ioyfD+K6sVWcVnS1Rt4iw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-+H+4zUWQd/Hu0s/3Z7e5UOzqKt9wHt6iRJzvHZuSjyE5F3dFJcTlVpAB4O5v8C0g5rRn1R8tWwXQLaZ6N5q1/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- Start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="#">Yazen</a>

    <!-- Navbar toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">University</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailer/index.php">Contact</a>
        </li>
      </ul>
    </div>

    <!-- Search bar -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Type To Text" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- End navbar -->

<!-- Start header -->
<section class="sec1" style="position: relative; background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg); background-position: center; background-size: cover; height: 80vh;">
  <div class="img-container">
    <img class="img-fluid" src="#" alt="">
  </div>
  <div class="" style="position: absolute; left: 20%; top: 15%;">
    <p class="name" style="font-weight: bold; font-size: 3rem; color: #ff720096;">SCHOLARSHIP
      <span class="desc" style="font-weight: bold; color: #000; font-size: 3rem; margin-bottom: 30px;">Yazen</span>
    </p>
    <p class="desc" style="font-weight: bold; color: #fff; margin-bottom: 30px;">نحو مستقبل زاهر</p>
    <a style="text-decoration: none; color: #000; transition: .3s ease; text-decoration: none; display: inline-block; margin: 10px; padding: 10px 7px; border: 2px solid #fff; border-radius: 20px; background-color: #ff720096;" href="master/register.php" class="btn">JOIN US</a>
    <div style="" class="icons">
      <a style="text-decoration: none; color: #fff;" href="#"><i class="fab fa-facebook fa-lg"></i></a>
      <a style="text-decoration: none; color: #fff;" href="#"><i class="fab fa-instagram fa-lg"></i></a>
      <a style="text-decoration: none; color: #fff;" href="#"><i class="fab fa-twitter fa-lg"></i></a>
      <a style="text-decoration: none; color: #fff;" href="#"><i class="fab fa-google fa-lg"></i></a>
      <a style="text-decoration: none; color: #fff;" href="#"><i class="fab fa-skype fa-lg"></i></a>
    </div>
  </div>
</section>
<!-- End header -->


<section class="cards container" id="services">
    <h2 class="title">Services</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="icon">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="info">
                    <h3>Recording format of University</h3>
                    <p>We will help you to study in any university around the world.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="icon">
                    <i class="fab fa-google"></i>
                </div>
                <div class="info">
                    <h3>Recording to free scholarship</h3>
                    <p>We can help you to record for free study outside your country.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="info">
                    <h3>Insurance housing</h3>
                    <p>If you recommend us, we can help you to insure your housing.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="info">
                    <h3>Curriculum vitae</h3>
                    <p>Make your CV and fill in all your information.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="projects" id="projects">
    <div class="container">
        <h2 class="title">Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="project-img">
                        <img src="img/f.jpg" alt="Information Technology">
                    </div>
                    <div class="project-info">
                        <p>Information technology (IT) is the use of computers to create, process, store, retrieve, and exchange all kinds of data...</p>
                        <strong class="project-title">
                            <p>Information Technology</p>
                            <a href="#" class="more"></a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="project-img">
                        <img src="img/i.jpg" alt="Business Administration">
                    </div>
                    <div class="project-info">
                        <p>Business Administration is the work of managing an organization's business resources, time, and people...</p>
                        <strong class="project-title">
                            <span>Business Administration</span>
                            <a href="#" class="more"></a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="project-img">
                        <img src="img/j.jpg" alt="Computer Science">
                    </div>
                    <div class="project-info">
                        <p>Computer science is the study of computers including computation, hardware, and software design...</p>
                        <strong class="project-title">
                            <span>Computer Science</span>
                            <a href="#" class="more"></a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="project-img">
                        <img src="img/l.jpg" alt="Civil Engineering">
                    </div>
                    <div class="project-info">
                        <p>Civil Engineering conceives, designs, builds, supervises, operates, constructs, and maintains infrastructure...</p>
                        <strong class="project-title">
                            <span>Civil Engineering</span>
                            <a href="#" class="more"></a>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card project-card">
                    <div class="project-img">
                        <img src="img/k.jpg" alt="Accounting">
                    </div>
                    <div class="project-info">
                        <p>Accounting is the process of measuring and sharing financial and other information about businesses.</p>
                        <strong class="project-title">
                            <span>Accounting</span>
                            <a href="#" class="more"></a>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="university container" id="university">
    <h2 class="title">University</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card project-card">
                <div class="project-img">
                    <img src="img/mar.jpg" alt="Mara University of Technology">
                </div>
                <div class="project-info">
                    <p class="project-category">Mara University of Technology is one of the best technology universities in Malaysia and in the world.</p>
                    <strong class="project-title">
                        <span>Mara University of Technology</span>
                        <a href="#" class="more"></a>
                    </strong>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card project-card">
                <div class="project-img">
                    <img src="img/botra.jpg" alt="Botra University">
                </div>
                <div class="project-info">
                    <p class="project-category">Botra University of Medical is very best and the cost of a seat is somewhat cheap.</p>
                    <strong class="project-title">
                        <span>Botra University</span>
                        <a href="#" class="more"></a>
                    </strong>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card project-card">
                <div class="project-img">
                    <img src="img/madina.jpg" alt="Al-Madina University">
                </div>
                <div class="project-info">
                    <p class="project-category">Al-Madina University has many sections around the world in India, Malaysia, Saudi Arabia, and Russia.</p>
                    <strong class="project-title">
                        <span>Al-Madina University</span>
                        <a href="#" class="more"></a>
                    </strong>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card project-card">
                <div class="project-img">
                    <img src="img/taiz.jpg" alt="Taiz University">
                </div>
                <div class="project-info">
                    <p class="project-category">Taiz University is the best university in Yemen and one of the best universities in the Middle East.</p>
                    <strong class="project-title">
                        <span>Taiz University</span>
                        <a href="#" class="more"></a>
                    </strong>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Footer Start -->
<?php include "footer.php"?>
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#home"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#serveces"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#Projects"><i class="bi bi-arrow-right text-primary me-2"></i>project</a>
                        <a class="text-light" href="#Univercity"><i class="bi bi-arrow-right text-primary me-2"></i>unvercity</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#home"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#serveces"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#Projects"><i class="bi bi-arrow-right text-primary me-2"></i>project</a>
                        <a class="text-light" href="#Univercity"><i class="bi bi-arrow-right text-primary me-2"></i>unvercity</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Almaror Street, Taiz, YEMEN</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>nawarmodhesh2022@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+967733235207</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">yazen</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="nawarmodhesh2022@gmail.com">NAWAR MODHESH</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

  
</body>
</html>