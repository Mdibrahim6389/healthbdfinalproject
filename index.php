<!-- header section star -->
<?php require('header.php')?>
  <!-- header section end -->
  
<!-- slider section star -->
<?php require('slider.php')?>
  <!-- slider section end -->

  <!-- find doctor section star -->
  <div class="about container">
    <div class="row p-4">
      <div class="section-title">
        <h2 class="text-light">Find Doctor</h2>
      </div>
      <div class="col-xs-4 col-md-4 mb-2">
        <input class="form-control btn-outlinr-primary" type="text" placeholder="Enter Doctor Name" aria-label="text">
      </div>
      <div class="col-xs-4 col-md-4 mb-2">
        <select class="form-select btn-outlinr-primary" aria-label="Default select example">
          <option selected>Search By Speciality</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-xs-4 col-md-4 mb-2">
        <select class="form-select btn-outlinr-primary" aria-label="Default select example">
          <option selected>Select By Location</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-4 mb-2 text-center">
      </div>
      <div class="col-4 mb-2 text-center">
        <button class="btn btn-danger btn-rounded mt-4 w-100" type="submit">Search</button>
      </div>
      <div class="col-4 mb-2 text-center">
      </div>
    </div>
  </div>
  <!-- find doctor section end -->

  <!-- appointment aection end -->
  <div class="container appointment_section">
    <div class="p-4">
      <div class="d-grid gap-2 col-12 text-center">
        <a href="appoiment.php" class="btn btn-primary m-auto w-75 p-2">Online Appointment</a>
      </div>
    </div>
  </div>
  <!-- appointment section end -->


  <!-- ======= counts section ======= -->
  <div class="counts container">
    <div class="row">
      <div class="col-lg-3 col-6 col-md-sm-6">
        <div class="count-box">
          <i class="fas fa-user-md"></i>
          <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Verified Doctors</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 mb-2">
        <div class="count-box">
          <i class="far fa-hospital"></i>
          <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Departments Speciliaty</p>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="count-box">
          <i class="fas fa-flask"></i>
          <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Hospital & Labs</p>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="count-box">
          <i class="fas fa-award"></i>
          <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Patients Served</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end counts section -->

  <!-- ======= browse section start ======= -->
  <div class="services">
    <div class=" container pt-2">
      <div class="section-title">
        <h2 class="mt-3">Browse on Speciliaty</h2>
      </div>
      <div class="row doctor_service">
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Doctors/ডাক্তার</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Hospital & Diagnostic Lab</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Health Bd Doctor Chamber & Digital Health Center</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/service_logo/Dental.png" alt="">
              </div>
              <h6><a href="">Dental/দাঁত</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/service_logo/Eye.png" alt="">
              </div>
              <h6><a href="">Eye/ চোখ</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Pharmacy/ ফার্মেসী/ মেডিসিন </a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Investigation</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Home Service/ হোম সার্ভিস</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="healthcard.php">Health Card/ হেলথ কার্ড</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Physiotherpy Center</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Ambulance Service</a></h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Blood Bank & Others</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ======= browse section end ======= -->

  <!-- ======= doctor section end ======= -->
  <div class="doctors">
    <div class="container">
      <div class="section-title mt-4">
        <h2>Doctors</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-6 mb-5 ">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/image/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Medical Officer</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              <div class="social">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-5 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/image/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Anesthesiologist</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-5 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/image/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Anesthesiologist</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/image/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>Cardiology</span>
              <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
              <div class="social">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/image/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Neurosurgeon</span>
              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
              <div class="social">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/image/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Neurosurgeon</span>
              <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
              <div class="social">
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ======= doctors section star ======= -->

  <!-- ======= hospital & dagnostic section start ======= -->
  <div id="services" class="bg-ligt">
    <div class="services container">
      <div class="section-title">
        <h2 class="p-4">Hospital & Diagnostic Lab</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/epi.png" alt="">
              </div>
              <h6><a href="">Epic Health Care Ltd</a></h6>
              <p>Address:<br>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Chevron</a></h6>
              <p>Address:<br>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">IBN Sina Diangnostic Ltd</a></h6>
              <p>Address:<br>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Park view Hospital Ltd</a></h6>
              <p>Address:<br>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Chattogram Metropalitan Hashpatal Ltd</a></h6>
              <p>Address:<br>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="icon-box d-flex justify-content-center align-items-center">
            <div>
              <div class="icon"><img class="img-fulid hospital_logo" src="assets/image/hostpital/Chevron-Logo.png"
                  alt="">
              </div>
              <h6><a href="">Islami Bank Hospital Ltd</a></h6>
              <p>Address:<br>aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ======= hospital & diagnostic section end ======= -->

  <!-- ======blog post star ======= -->
  <div class="gallery">
    <div class="gallery container">
      <div class="section-title mt-3">
        <h2>Blog Post</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class=" blogmainsection card">
            <img src="assets/image/blog/blog3.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
              <a href="#" class="btn btn-primary">Redmore</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="blogmainsection card">
            <img src="assets/image/blog/blog2.jpg" class="card-img-top" alt="Palm Springs Road" />
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
              <a href="#" class="btn btn-primary">Redmore</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="blogmainsection card">
            <img src="assets/image/blog/blog1.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content.</p>
              <a href="#" class="btn btn-primary">Redmore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== blog post end ======= -->

  <!-- ======= sponsor section star ======= -->

  <div class="container sponsor_slider">
    <div class="owl-two owl-carousel owl-theme">
      <div class="item"><img src="assets/image/sponsor_logo/untitled-1copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-2copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-3copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-1copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-2copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-3copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-1copy.jpg" alt="image1"></div>
      <div class="item"><img src="assets/image/sponsor_logo/untitled-2copy.jpg" alt="image1"></div>
    </div>
  </div>
  <!-- ======= sponsor section end ======= -->
  
  <!-- footer section star -->
  <?php require('footer.php') ?>
  <!-- footer section end -->