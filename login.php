<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon image-->
    <link rel="icon" type="image/x-icon" href="/assets/image/logo/logo1.png">
    <!-- font awesome 6 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- gallery -->
    <link rel="stylesheet" href="assets/css/lc_lightbox.css">
    <link rel="stylesheet" href="assets/css/minimal.css">
    <!-- date&time -->
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>E-HealthBD</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/image/logo/logo1.png" alt="image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ogranizationlist.php">Mission & Vision</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctor_detils.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <div class="btn-group">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Eng/বাংলা
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="doctorlist.php">Bangla</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
              </ul>
            </div>
            <div class="btn-group ms-1">
              <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Registration
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="doctor_reg.php">Doctor</a></li>
                <li><a class="dropdown-item" href="Visitor.php">Visitor</a></li>
                <li><a class="dropdown-item" href="Reg_form2.php">Organizition</a></li>
              </ul>
            </div>
            <div class="ms-1">
              <a href="login.php" class="btn btn-success text-white text-decoration-none">Login</a>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- top bar end -->

  <!-- Top Bar End -->
  <div class="container-fulid login_section">
    <section id="formsection" class="row">
      <div class="col-sm-12 my-auto">
        <form>
          <h4>Login</h4>
          <div class="mb-4 InputWithIcon">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" required placeholder="Enter your e-mail" id="exampleInputEmail1">
          </div>
          <div class="mb-4">
            <div class="forgotpassword">
              <a class="" href="#">Forgot Password</a>
            </div>
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" required placeholder=" Enter your Password"
              id="exampleInputPassword1">
          </div>
          <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="submitbtn"><button type="submit" class="btn btn-primary">Login</button></div>
          <div class="mb-3 mt-4">
            <p>Not yet member? <a href="Visitor.php">Singup Now</a></p>
          </div>
        </form>
      </div>
    </section>
  </div>

  <!-- ======= Footer ======= -->
  <!-- ======= footer ======= -->
  <footer id="footer">
    <div class="container footer-top">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Health-BD</h3>
          <p>
            A108 Adam Street <br>
            Chattogram Softwere Park<br>
            Agbrabd, Chattogram <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>
        </div>
        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Departments</h4>
          <ul>
            <li><a href="#">Pediatric</a></li>
            <li><a href="#">Laboratory</a></li>
            <li><a href="#">Odontology</a></li>
            <li><a href="#">Physiotherapy</a></li>
            <li><a href="#">Ophthalmology</a></li>
            <li><a href="#">Cynecology</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">How We Are</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Our Awards</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Our Professionals</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Opening Hours</h4>
          <table>
            <tr>
              <td>Saturday:</td>
              <td>09:00 - 19:00</td>
            </tr>
            <tr>
              <td>Sunday:</td>
              <td>09:00 - 19:00</td>
            </tr>
            <tr>
              <td>Monday:</td>
              <td>09:00 - 19:00</td>
            </tr>
            <tr>
              <td>Tuesday:</td>
              <td>09:00 - 19:00</td>
            </tr>
            <tr>
              <td>Wedneday:</td>
              <td>09:00 - 19:00</td>
            </tr>
            <tr>
              <td>Friday:</td>
              <td>09:00 - 19:00</td>
            </tr>
          </table>
          <form action="post" method="post">
            <input type="email" name="email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
        <div class="col-6 p-1">
          <p>Copyright ©2022 All rights reserved Health-BD|Design By-Easyfie.com</p>
        </div>
        <div class="col-6 p-1 footer_icon">
          <div class="float-end social">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-solid fa-envelope"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <!-- end Footer -->

 <!-- owl carousel js -->
 <script src="assets/js/jquery-3.6.0.min.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>
 <!-- bootstrap js -->
 <script src="assets/js/bootstrap.min.js"></script>
 <!-- bootstrap js -->
 <script src="assets/js/purecounter.js"></script>
 <!-- Gallary -->
 <script src="assets/js/lc_lightbox.lite.js"></script>
 <!-- date and time -->
 <script src="assets/js/jquery.datetimepicker.full.min.js"></script>
</body>

</php>