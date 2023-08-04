<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demos.codexcoder.com/themeforest/html/ollya-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 16:36:17 GMT -->

<head>
	<meta charset="utf-8">
	<title>Ollya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="style.css">
	<!-- Include Owl Carousel CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<style>
	.hd1 {
		font-size: 50px;
		background-image: linear-gradient(to right, #035caa 0%, #19a9ff 30%, #3ac8bb 30%, #dacce6 73%, #fff 100%);
		background-clip: text;
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-weight: 800 !important;


	}

	/* Add this CSS for transparent navbar effect */
	.header__bottom {
		background-color: transparent;
	}

	/* Optional: If you want to change the text color to white for better visibility on a transparent background */
	.header__bottom .navbar-nav a {
		color: #fff;
	}

	/* Optional: Change the hover color of the navigation links */
	.header__bottom .navbar-nav a:hover {
		color: #00f3ff;
		/* Replace with your desired hover color */
	}

	.gradient-text {

		font-weight: bold;
		background-image: linear-gradient(45deg, rgb(5, 217, 217), rgb(9, 255, 226));
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		background-clip: text;
		text-fill-color: transparent;

	}

	.gradient-text:hover {
		animation: glowAnimation 4s ease-in-out infinite;
	}

	body {
		background-image: url(assets/images/bannerbg77.png);
		background-repeat: no-repeat;
		background-size: contain;
		background-color: #140638;

	}

	* {
		margin: 0px;
		padding: 0px;
	}

	/* body{
		    background-image: linear-gradient(to right, #2d2f76, #2b2861, #26224c, #211c39, #1a1627, #191525, #191424, #181322, #1e1730, #251a3e, #2c1e4c, #33215b);background-image: linear-gradient(to right, #3f3fbd, #37379a, #2f2f78, #282658, #201e39, #22203b, #25213d, #27233f, #382f63, #4b3b89, #6146b0, #7b50d8);
z-index: 0;
	} */
</style>

<body>
	<!-- preloader start here -->
	{{-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> --}}
	<!-- preloader ending here -->


	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
	<!-- scrollToTop ending here -->




	<!-- ================> header section start here <================== -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
	<!-- ================> header section end here <================== -->





    @yield('main')










    

	<!-- ================> Footer section start here <================== -->
	<footer class="footer overflow-hidden">
		<div class="footer__top bg_img" style="background-image: url(assets/images/footer/bg-3.jpg)">
			<div class="footer__newsletter wow fadeInUp" data-wow-duration="1.5s">
				<div class="container">
					<div class="row g-4 justify-content-center">
						<div class="col-lg-6 col-12">
							<div class="footer__newsletter--area">
								<div class="footer__newsletter--title">
									<h4>Newsletter Sign up</h4>
								</div>
								<div class="footer__newsletter--form">
									<form action="#">
										<input type="email" placeholder="Your email address">
										<button type="submit" class="default-btn"><span>Subscribe</span></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="footer__newsletter--area justify-content-xxl-end">
								<div class="footer__newsletter--title me-xl-4">
									<h4>Join Community</h4>
								</div>
								<div class="footer__newsletter--social">
									<ul>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitch"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-facebook-messenger"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__toparea padding-top padding-bottom wow fadeInUp" data-wow-duration="1.5s">
				<div class="container">
					<div class="row g-5 g-lg-0">
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Our Information</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> About Us</a>
												</li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Contact Us</a>
												</li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Customer
														Reviews</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Success
														Stories</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Business
														License</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>My Account</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Manage
														Account</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Safety Tips</a>
												</li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Account
														Varification</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Safety and
														Security</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Membership
														Level</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Help Center</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Help center</a>
												</li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> FAQ</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Quick Start
														Guide</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Tutorials</a>
												</li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Associate
														Blog</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="footer__item">
								<div class="footer__inner">
									<div class="footer__content">
										<div class="footer__content--title">
											<h4>Community</h4>
										</div>
										<div class="footer__content--desc">
											<ul>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Privacy
														policy</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> End User
														Agreements</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Refund
														Policy</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Cookie
														policy</a></li>
												<li><a href="#"><i class="fa-solid fa-angle-right"></i> Report abuse</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer__bottom wow fadeInUp" data-wow-duration="1.5s">
			<div class="container">
				<div class="footer__content text-center">
					<p class="mb-0">All Rights Reserved &copy; <a href="index.html">Ollya</a> || Design By: CodexCoder
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- ================> Footer section end here <================== -->



	<!-- All Needed JS -->
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
		$(document).ready(function () {
			// Initialize the Owl Carousel
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				nav: false,
				dots: false,
				autoplay: true, // Enable autoplay
				autoplayTimeout: 2000, // Adjust the time between each slide change (in milliseconds)
				autoplaySpeed: 9000, // Adjust the speed of the sliding animation (in milliseconds)
				autoplayHoverPause: true, // Pause autoplay on mouse hover
				animateOut: 'fadeOut', // Use 'fadeOut' for a smooth transition between slides
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 3
					},
					1000: {
						items: 5
					}
				}
			});
		});
	</script>






	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="../../../../www.google-analytics.com/analytics.js" async></script>
	<!-- Include Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
	<!-- Include Owl Carousel JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/ollya-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 16:39:35 GMT -->

</html>