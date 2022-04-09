<!-- header section star -->
<?php require('header.php')?>
  <!-- header section end -->

    <div class="container registration_form py-5">
        <div class=" col-12">
            <h2 class="text-light">Online Appointment</h2>
        </div>
        <form action="forms/appointment.php" method="post" class="php-email-form px-4">
            <div class="row text-light card-body">
                <div class="col-lg-6 col-12 p-2 mb-3">
                    <label for="inputcategories" class="form-label">Select Doctor<samp
                            class="text-danger">*</samp></label>
                    <select id="inputcategories" class="form-select">
                        <option selected>Choose Option</option>
                        <option>Department 1</option>
                        <option>Department 2</option>
                    </select>
                </div>
                <div class=" col-lg-6 col-12 p-2 mb-3">
                    <label for="inputname" class="form-label">Patient Name <samp class="text-danger">*</samp></label>
                    <input type="text" class="form-control" required id="inputname"
                        placeholder="Enter your Patient Name">
                </div>
                <div class="col-lg-6 col-12 p-2 mb-3">
                    <label for="inputphone5" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputphone5" placeholder="Enter your Email">
                </div>
                <div class="col-lg-6 col-12 p-2 mb-3">
                    <label for="inputmobi7" class="form-label">Mobile Number<samp class="text-danger">*</samp></label>
                    <input type="number" class="form-control" required id="inputmobi7"
                        placeholder="Enter your Mobile Number">
                </div>
                <div class="col-lg-6 col-12 p-2 mb-3">
                    <label for="inputemail6" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputemail6" placeholder="Enter your Email">
                </div>
                <div class="col-lg-6 col-12 p-2 mb-3">
                    <label for="inputweb7" class="form-label">Date<samp class="text-danger">*</samp></label>
                    <input type="text" required class="datepicker form-control"placeholder="Enter your Date">
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