<!-- header section star -->
<?php require('header.php')?>
  <!-- header section end -->


  <div class="container visitor_from py-5">
    <div class="section-title col-12">
      <h2 class="text-light">VISITOR REGISTRATION FORM</h2>
    </div>

    <form action="forms/appointment.php" method="post" class="php-email-form px-4">
      <div class="row text-light card-body">
        <div class=" col-lg-6 col-12 p-2">
          <label for="inputAddressname" class="form-label">Name:<samp class="text-danger">*</samp></label>
          <input type="text" class="form-control" required id="inputAddressname" placeholder="Enter your Full Name">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputgender34" class="form-label">Gendar<samp class="text-danger">*</samp></label>
          <select required id="inputgender34" class="form-select">
            <option selected>Select Gendar</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputAddressmob" class="form-label">Mobile No:<samp class="text-danger">*</samp></label>
          <input type="email" class="form-control" required id="inputAddressmob" placeholder="Enter Mobile Number">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputAddresspass" class="form-label">Password:<samp class="text-danger">*</samp></label>
          <input type="password" class="form-control" required id="inputAddresspass" placeholder="Enter Password">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputAddresscompp" class="form-label">Confirm Password:<samp class="text-danger">*</samp></label>
          <input type="password" class="form-control" required id="inputAddresscompp" placeholder="Confirm Password">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputAddressaddress" class="form-label">Address:<samp class="text-danger">*</samp></label>
          <input type="text" class="form-control" id="inputAddressaddress" placeholder="Enter your Address">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputAddressdate" class="form-label">Date Of Birth:<samp class="text-danger">*</samp></label>
          <input type="email" class="form-control" required id="inputAddressdate"
            placeholder="Enter your Date of Brith">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputAddressoccupation" class="form-label">Occupation:</label>
          <input type="text" class="form-control" id="inputAddressoccupation" placeholder="Enter your Occupation">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputStateblood" class="form-label">Blood Group<samp class="text-danger">*</samp></label>
          <select id="inputStateblood" class="form-select">
            <option selected>Select</option>
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
            <option>O-</option>
            <option>AB+</option>
            <option>AB-</option>
          </select>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputweb8" class="form-label">Last Donate Date:</label>
          <input type="text" class="form-control" id="inputweb8" placeholder="Enter Last Donate Date">
        </div>
        <div class="col-lg-12 col-12 p-4 text-center">
          <div class="d-grid col-6 mx-auto mt-3">
            <button class="btn btn-primary" type="button">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- Appointment Section End -->
  
 <!-- footer section star -->
 <?php require('footer.php') ?>
  <!-- footer section end -->