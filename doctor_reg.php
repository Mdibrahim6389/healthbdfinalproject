 <!-- footer section star -->
 <?php require('header.php') ?>
  <!-- footer section end -->


  <div class="container doctorreg_section">
    <div class="col-12">
      <h2 class="text-light">DOCTOR'S REGISTRATION FORM</h2>
    </div>
    <form action="forms/appointment.php" method="post" class="php-email-form px-4">
      <div class="row text-light card-body">
        <div class=" col-lg-6 col-12 p-2">
          <label for="inputname" class="form-label">Doctor's Name:<samp class="text-danger">*</samp></label>
          <input type="text" class="form-control" required id="inputname" placeholder="Enter Doctor Full Name">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputState" class="form-label">Gendar<samp class="text-danger">*</samp></label>
          <select id="inputState" class="form-select">
            <option selected>Select</option>
            <option>Male</option>
            <option>Femaile</option>
          </select>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputpic" class="form-label">Doctor's Picture:<samp class="text-danger">*</samp></label>
          <input type="file" class="form-control" required id="inputpic">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputquaifi" class="form-label">Qualifications:</label>
          <input type="text" class="form-control" id="inputquaifi" placeholder="Enter your Email">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputexpert" class="form-label">Expert In<samp class="text-danger">*</samp></label>
          <select id="inputexpert" class="form-select">
            <option selected>Select</option>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputdesination" class="form-label">Designation</label>
          <input type="text" class="form-control" id="inputdesination" placeholder="Enter Doctor Designation">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputorg" class="form-label">Organisation</label>
          <input type="text" class="form-control" id="inputorg" placeholder="Enter Organizition Name">
        </div>
        <div class="col-lg-12 text-center mt-4">
          <h4>Chamber-1</h4>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputnme1" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputnme1" placeholder="Enter Chamber Name">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputhour1" class="form-label">Visiting Hour</label>
          <input type="text" class="form-control" id="inputhour1" placeholder="Enter Visiting Hour">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputlocatin1" class="form-label">Location<samp class="text-danger">*</samp></label>
          <select id="inputlocatin1" class="form-select">
            <option selected>Select</option>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputserial1" class="form-label">For Serial</label>
          <input type="number" class="form-control" id="inputserial1" placeholder="Enter your Mobile Number">
        </div>
        <div class="col-lg-12 text-center mt-4">
          <h4>Chamber-2</h4>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputname2" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputname2" placeholder="Enter Chamber Name">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputvisitin2" class="form-label">Visiting Hour</label>
          <input type="text" class="form-control" id="inputvisitin2" placeholder="Enter Visiting Hour">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputlocation2" class="form-label">Location<samp class="text-danger">*</samp></label>
          <select id="inputlocation2" class="form-select">
            <option selected>Select</option>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option>Option 4</option>
            <option>Option 5</option>
          </select>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputserial2" class="form-label">For Serial</label>
          <input type="number" class="form-control" id="inputserial2" placeholder="Enter your Mobile Number">
        </div>
        <div class="col-lg-12 text-center mt-4">
          <h4>User Creation</h4>
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputemail2" class="form-label">E-mail / Mobile No.</label>
          <input type="email" class="form-control" id="inputemail2" placeholder="Enter E-mail/Mobile Number">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputpass2" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputpass2" placeholder="Enter Password">
        </div>
        <div class="col-lg-6 col-12 p-2">
          <label for="inputcomfirmp" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="inputcomfirmp" placeholder="Confirm Password">
        </div>
        <div class="col-lg-12 col-12 p-4 text-center">
          <div class="d-grid col-6 mx-auto">
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