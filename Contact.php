<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Online Quiz System</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="image/SHMK logo.jpg" type="image/svg+xml">
  
  <script src="js/bootstrap.bundle.js"></script>
</head>
  <div class="container-fluid">
    <!-- Top Bar -->
    <div class="row bg-primary py-2 text-white text-center fw-bold">
      <div class="col-md-2">Welcome Varanasi</div>
      <div class="col-md-10">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active text-white" href="/SHMK/index.php">Home |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Paper |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Notes |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="service.php">Services |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="login.php">Login |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="register.php">Sign Up |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Student Dashboard |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#About">About Us |</a></li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Header -->
    <div class="row py-3 align-items-center">
      <div class="col-lg-2 col-md-3 col-sm-4 text-center">
        <img src="image/SHMK logo.jpg" alt="Logo" class="img-fluid">
      </div>
      <div class="col-lg-5 col-md-5 col-sm-8 text-center">
        <h1 class="fw-bold">SHMK, Varanasi</h1>
        <h6>SHMK Group Of Industry</h6>
      </div>
      <div class="col-lg-2 col-md-4 text-center d-none d-md-block">
        <img src="image/education-.png" alt="Education Image" class="img-fluid">
      </div>
      <div class="col-lg-3 text-center">
        <div class="pt-2">
          <h6 class="fw-bold"><i class="fa-solid fa-phone fa-bounce"></i> Call Us: +91 8881527679</h6>
          <h6 class="fw-bold"><i class="fa-solid fa-envelope fa-shake"></i> Mail Us: ssp979410@gmail.com</h6>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active text-white" href="#">Home |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Pyq Paper |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Programming |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="Events.html">Imp Notes |</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="\SHMK\onlinequiz_0/index.php">Mock test |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="Contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!--contact us  part-->
    <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="image/image0_0 (2).jpg" class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form>
                            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                <p class="lead fw-normal mb-0 me-3">Contact Us</p>
                            </div>
                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="Name" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a Uesr Name" />
                                <label class="form-label" for="form3Example3">Name</label>
                            </div>
                            

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a User email address" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                           <!-- Phone Number  -->
                           <div data-mdb-input-init class="form-outline mb-4">
                            <input type="tel" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a User Phone Number" />
                            <label class="form-label" for="form3Example3">Phone Numaber</label>
                        </div>

                        
                           <!-- Message  -->
                           <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Message:</label>
                            <textarea id="message" class="input2" name="message" rows="2" colmns="6" required></textarea>
                           
                        </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">Remember me</label>
                                </div>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Sumbit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
    <!-- Footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="row">

      <footer class="bg-primary text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row my-4">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

              <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                <img src="image/SHMK logo.jpg" height="70" alt=""
                  loading="lazy" />
              </div>

              <p class="text-center">SHMK, Varanasi <br />
                SHMK Group Of Industry</p>

              <ul class="list-unstyled d-flex flex-row justify-content-center">
                <li>
                  <a class="text-white px-2" href="#!">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li>
                  <a class="text-white px-2" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a class="text-white ps-2" href="#!">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Animals</h5>

              <ul class="list-unstyled">
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Home</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>
                  Paper</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>
                  Notes </a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Services </a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>
                  About Us</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Study Material</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pyq Paper </a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">
              Programming</h5>

              <ul class="list-unstyled">
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Imp Notes </a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Mock test </a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Contact Us</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Course</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Job</a>
                </li>
                <li class="mb-2">
                  <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>SHMK</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Contact</h5>

              <ul class="list-unstyled">
                <li>
                  <p><i class="fas fa-map-marker-alt pe-2"></i>Uttar Pradesh ,Varanasi</p>
                </li>
                <li>
                  <p><i class="fas fa-phone pe-2"></i>+91 8881527976</p>
                </li>
                <li>
                  <p><i class="fas fa-envelope pe-2 mb-0"></i>ssp945134@gmail.com</p>
                </li>
              </ul>
              <p>
              For more information about our services, internship opportunities, or any inquiries, please visit our website or contact Me.
              </p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          @ SHMK, Varanasi
          <a class="text-white" href="#">SHMK Group Of Industry.Com</a>
        </div>
        <!-- Copyright -->
      </footer>

    </div>
    <!-- End of .container -->

  </div>
  <script src="js/app.js"></script>

</body>

</html>