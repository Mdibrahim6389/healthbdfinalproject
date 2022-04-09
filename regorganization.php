   <!-- footer section star -->
   <?php require('header.php') ?>
  <!-- footer section end -->

  <div class="container registration_form py-5">
    <div class=" col-12">
      <h2 class="text-light">ORGANIZATION REGISTRATION FORM</h2>
    </div>
    <form action="forms/appointment.php" method="post" class="php-email-form px-4">
      <div class="row text-light card-body">
        <div class=" col-lg-6 col-12 p-2 mb-3">
          <label for="inputname" class="form-label">Name of
            Company <samp class="text-danger">*</samp></label>
          <input type="text" class="form-control" required id="inputname" placeholder="Enter your Company Name">
        </div>
        <div class="col-lg-6 col-12 p-2 mb-3">
          <label for="inputphone5" class="form-label">Phone</label>
          <input type="number" class="form-control" id="inputphone5" placeholder="Enter your Phone Number">
        </div>
        <div class="col-lg-6 col-12 p-2 mb-3">
          <label for="inputmobi7" class="form-label">Mobile Number<samp class="text-danger">*</samp></label>
          <input type="number" class="form-control" required id="inputmobi7" placeholder="Enter your Mobile Number">
        </div>
        <div class="col-lg-6 col-12 p-2 mb-3">
          <label for="inputemail6" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputemail6" placeholder="Enter your Email">
        </div>
        <div class="col-lg-6 col-12 p-2 mb-3">
          <label for="inputweb7" class="form-label">Web Address</label>
          <input type="text" class="form-control" id="inputweb7" placeholder="Enter your Web Address">
        </div>
        <div class="col-lg-6 col-12 p-2 mb-3">
          <label for="inputcategories" class="form-label">Categories<samp class="text-danger">*</samp></label>
          <select id="inputcategories" class="form-select">
            <option selected>Choose Option</option>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
        <div class="col-lg-12 col-12 p-4 text-center">
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Submit</button>
          </div>
        </div>
      </div>
    </form>>
  </div>
  <!-- Appointment Section End -->

    <!-- footer section star -->
    <?php require('footer.php') ?>
  <!-- footer section end -->