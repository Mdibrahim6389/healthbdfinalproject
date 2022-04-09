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
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
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

	<div class="container-fluid gallery_section">
		<h2 class="text-center">Gallery Image</h2>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem" href="assets/image/testimonials/testimonials-1.jpg" title="image 1testimonials-1.jpg"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-1.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-1.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem" href="assets/image/testimonials/testimonials-6.jpg" title="image-6"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-6.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-6.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem" href="assets/image/testimonials/testimonials-3.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-3.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-3.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem img-fluid" href="assets/image/testimonials/testimonials-4.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-4.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-4.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem img-fluid" href="assets/image/testimonials/testimonials-5.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-5.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-5.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem img-fluid" href="assets/image/testimonials/testimonials-4.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-4.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-4.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem" href="assets/image/testimonials/testimonials-1.jpg" title="image 1testimonials-1.jpg"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-1.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-1.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem" href="assets/image/testimonials/testimonials-2.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-2.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-2.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem" href="assets/image/testimonials/testimonials-3.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-3.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-3.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem img-fluid" href="assets/image/testimonials/testimonials-4.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-4.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-4.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem img-fluid" href="assets/image/testimonials/testimonials-5.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-5.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-5.jpg)"></span>
				</a>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-3">
				<a class="elem img-fluid" href="assets/image/testimonials/testimonials-4.jpg" title="image 2"
					data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone"
					data-lcl-thumb="assets/image/testimonials/testimonials-4.jpg">
					<span style="background-image:url(assets/image/testimonials/testimonials-4.jpg)"></span>
				</a>
			</div>

		</div>
	</div>

   <!-- footer section star -->
   <?php require('footer.php') ?>
  <!-- footer section end -->

	<script type="">
		$(document).ready(function(e) {

		// live handler
		lc_lightbox('.elem', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,	
		thumb_attr: 'data-lcl-thumb', 

		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
		});	

		});
		</script>
</body>

</php>