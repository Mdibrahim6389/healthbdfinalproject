<!-- header section star -->
<?php require('header.php')?>
  <!-- header section end -->

  <!-- ======= contact Section ======= -->
  <section class="contact container mb-5">
    <div class="col-12 my-auto">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7533334266222!2d91.82445031443028!3d22.36294084627043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9a96c03c8f5%3A0x312acaa137824f92!2sHealth-BD!5e0!3m2!1sen!2sbd!4v1648650235472!5m2!1sen!2sbd"
        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="section-title mt-4">
      <h2>Contact Us</h2>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="fa-solid fa-address-card"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="fa-solid fa-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </section>

   <!-- footer section star -->
   <?php require('footer.php') ?>
  <!-- footer section end -->